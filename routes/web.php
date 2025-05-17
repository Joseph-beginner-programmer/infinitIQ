<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;






#login
Route::get('/login' , [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');



#Register
Route::get('/register' , [RegisterController::class , 'index'])->name('register');
Route::post('/register' , [RegisterController::class , 'store'])->name('register.submit');

#Home
Route::get('/home' , [HomeController::class , 'index'])->name('home');

#Coursesr
Route::get('/courses' , [CoursesController::class , 'index'])->name('courses');

#About
Route::get('/about' , [AboutController::class , 'index'])->name('about');

#Pricing
Route::get('/pricing' , [PricingController::class , 'index'])->name('pricing');

#Contact
Route::get('/contact' , [ContactController::class , 'index'])->name('contact'); 
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
