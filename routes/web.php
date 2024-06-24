<?php

// use App\Http\Controllers\SignupController;
// use Illuminate\Support\Facades\Route;





// Route::get('/', function () {
//     return view('Auth.Signup');
// });

// Route::get('/header', function () {
//     return view('layouts.header.navigation');
// });

// Route::get('/nav', function () {
//     return view('layouts.navbar.navigationnav');
// });

// Route::get('/main', function () {
//     return view('');
// });

// Route::get('/signin', function () {
//     return view('auth.Signin');
// });

// Route::get('/home', function () {
//     return view('mainpage.Home');
// });

// Route::get('/create', function () {
//     return view('mainpage.Create');
// });

// Route::get('/task', function () {
//     return view('mainpage.Task');
// });



// Route::get('/signup', [SignupController::class, 'create'])->name('signup');
// Route::post('/signup', [SignupController::class, 'tore'])->name('signup.store');

use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', [SignupController::class, 'create'])->name('signup.create');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::get('/signin', [SigninController::class, 'create'])->name('signin.create');
Route::post('/signin', [SigninController::class, 'store'])->name('signin.store');

Route::get('/home', function () {
    return view('mainpage.Home'); // Assume there is a dashboard view
})->name('home')->middleware('auth');

Route::get('/login', [SigninController::class, 'create'])->name("login");

// Coba masih sama gak bisa abang liat di kernel sama authenticate.php nya deh soalnya sama aku ada yg di ubah

Route::get('/dashboard', function () {
    return view('SpalshScreen');
});

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/home', [TaskController::class, 'index'])->name('home');

Route::get('/logout', function () {
    return view('auth.Logout');
});
