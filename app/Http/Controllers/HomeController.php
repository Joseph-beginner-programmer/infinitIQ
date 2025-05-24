<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::with('instructor')->get(); // ambil courses + instructor
        return view('home', compact('courses')); // kirim ke home.blade.php
    }
}
