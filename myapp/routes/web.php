<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestlayoutController;

Route::get('/', function () {
    return view('welcome');
});

// day 01
Route::get('/hello', function () {
    return "<h1>Hello Laravel</h1>";
});

// day 02
// 1. Basic Routes
// practice - basic routes
Route::get('/home', function () {
    return view('home');
});

Route::post('/save_data', function () {
    return "<h1>Data saved successfully</h1>";
});

Route::any('/any_data', function () {
    return "<h1>Any HTTP method accepted</h1>";
});

// exercise - basic routes
Route::get('/welcome', function () {
    return "<h1>Welcome to Laravel, Rabia</h1>";
});

Route::get('/today', function () {
    return "<h1>Today's date is " . date('d-M-Y') . "</h1>";
});

Route::get('/profile', function () {
    return view('profile');
});

Route::post('/allowed', function () {
    return "<h1>Allowed</h1>";
});

// 2. Named Routes
// practice - named routes
Route::get('/dashboard', function () {
    return "Dashboard";
})->name('dashboard');

// exercise - named routes
Route::get('/students', function () {
    return "Students List";
})->name('students.list');

Route::get('/students/add', function () {
    return "Students Add";
})->name('students.add');

// 3. Route Parameters
// practice - route parameters (required)
Route::get('/user/{id}', function ($id) {
    return "<h1>User ID: " . $id . "</h1>";
});

// practice - route parameters (optional)
Route::get('/student_name/{name?}', function ($name = "Student") {
    return "<h1>Student Name: " . $name . "</h1>";
});

// practice - route parameters (required + optional)
Route::get('/student_id_name/{id}/{name?}', function ($id, $name = "No name") {
    return "<h1>Student ID: " . $id . "</h1><br><h1>Student Name: " . $name . "</h1>";
});

// exercise - route parameters
Route::get('/student_id/{id}', function ($id) {
    return "<h1>Student ID: " . $id . "</h1>";
});

Route::get('/city/{name?}', function ($name = "Karachi") {
    return "<h1>City Name: " . $name . "</h1>";
});

Route::get('/product/{category}/{id}', function ($category, $id) {
    return "<h1>Product Category: " . $category . "</h1><h1>Product ID: " . $id . "</h1>";
});

Route::get('/sum/{a}/{b}', function ($a, $b) {
    return "<h1>Sum: " . $a + $b . "</h1>";
});

Route::get('/invoice/{id}', function ($id) {
    return "<h1>Invoice ID: " . $id . "</h1>";
})->where('id', '[0-9]+'); // only numbers allowed


// testing - fallback route
// Route::fallback(function () {
//     return "<h1>404 Not Found</h1>";
// });

// day 03
Route::get('/test', [TestController::class, 'index']);

// group routes
Route::controller(TestController::class)->group(function () {
    Route::get('/test', 'index');
    Route::get('/show', 'show');
    Route::get('/make', 'create');
    Route::get('/destroy', 'destroy');
});

Route::get('/enter', [UserController::class, 'index']);
Route::post('/user_name', [UserController::class, 'print_user_name']);

// day 04
Route::get('/profile2/{name?}', [UserController::class, 'profile']);

// day 05
Route::get('/home', [UserController::class, 'home']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/website_home', [TestlayoutController::class, 'website_home']);
Route::get('/website_about', [TestlayoutController::class, 'website_about']);
Route::get('/website_contact', [TestlayoutController::class, 'website_contact']);

// day 06
Route::post('/contact-submit', [TestlayoutController::class, 'contact_submit']);