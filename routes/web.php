<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', [SignupController::class, 'create'])->name('signup.create');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::get('/signin', [SigninController::class, 'create'])->name('signin.create')->middleware('auth');
Route::post('/signin', [SigninController::class, 'store'])->name('signin.store');

Route::get('/', function () {
    return view('SpalshScreen');
});

Route::get('/logout', function () {
    return view('auth.Logout');
});

Route::get('/calendar', function () {
    return view('mainpage.Calender');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ListController::class, 'index'])->name('home');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/tasks', [TaskController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::post('/tasks/{task}/add-list', [TaskController::class, 'addList'])->name('tasks.addList');

    Route::get('/lists', [ListController::class, 'index'])->name('lists.index');
    Route::get('/tasks/{task}/lists/create', [ListController::class, 'create'])->name('lists.create');
    Route::post('/tasks/{task}/lists', [ListController::class, 'store'])->name('lists.store');
    Route::get('/lists/{list}/edit', [ListController::class, 'edit'])->name('lists.edit');
    Route::put('/lists/{list}', [ListController::class, 'update'])->name('lists.update');
    Route::delete('/lists/{list}', [ListController::class, 'destroy'])->name('lists.destroy');
    Route::get('/events', [ListController::class, 'events'])->name('lists.events');

});



