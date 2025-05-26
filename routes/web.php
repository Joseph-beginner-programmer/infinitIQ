<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\DashboardController;






#login

Route::get('/login' , [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

#logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');



#Register
Route::get('/register' , [RegisterController::class , 'index'])->name('register');
Route::post('/register' , [RegisterController::class , 'store'])->name('register.submit');

#Home
Route::redirect('/' , '/home');
Route::get('/home' , [HomeController::class , 'index'])->name('home');

#Courses
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
Route::get('/courses/{id}', [CoursesController::class, 'show'])->name('courses.show');
Route::middleware('auth')->post('/courses/{course}/enroll', [CoursesController::class, 'enroll'])->name('courses.enroll');


#About
Route::get('/about' , [AboutController::class , 'index'])->name('about');

#Pricing
Route::get('/pricing' , [PricingController::class , 'index'])->name('pricing');

#Contact
Route::get('/contact' , [ContactController::class , 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


#Dashboard
Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
