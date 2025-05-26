<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
public function index()
{
    // Ambil semua course beserta parts dan instructor
    $courses = \App\Models\Course::with(['parts', 'instructor'])->get();

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
        $course = Course::with(['parts', 'instructor'])->findOrFail($id);
            return view('CoursesDetail', compact('course'));
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
