<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CoursesController extends Controller
{
public function index(Request $request)
{
    $query = \App\Models\Course::with(['parts', 'instructor']);

    if ($request->filled('search')) {
        $query->where('title', 'LIKE', '%' . $request->search . '%');
    }

    // Sorting
    $sortBy = $request->input('sort_by', 'created_at');
    $order = $request->input('order', 'desc');

    $allowedSorts = ['created_at', 'length_value', 'rating', 'review_count'];
    if (in_array($sortBy, $allowedSorts)) {
        $query->orderBy($sortBy, $order);
    }

    $courses = $query->get();

  
    if ($user = $request->user()) {
        $enrolledIds = $user->courses->pluck('id')->toArray();
        $courses = $courses->sortByDesc(fn($c) => in_array($c->id, $enrolledIds))->values();
    }

    return view('courses.index', compact('courses'));
}



public function enroll(Request $request, Course $course)
{
      
    $user = $request->user();

    if (!$user->courses->contains($course->id)) {
        $user->courses()->attach($course->id, ['enrolled_at' => now()]);
    }

    return back()->with('success', 'You have enrolled in this course!');
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   public function show(string $id)
{
    $course = Course::with(['parts.items', 'instructor'])->findOrFail($id);

    $user = auth()->user();
    $isEnrolled = false;

    if ($user) {
        $isEnrolled = $user->courses->contains($course->id);
    }

    return view('CoursesDetail', compact('course', 'isEnrolled'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
