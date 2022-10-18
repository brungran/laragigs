<?php
// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingsController;

//all listings
Route::get('/', [ListingsController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingsController::class, 'create'])->middleware('auth');

//store listing data
Route::post('/listings', [ListingsController::class, 'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit', [ListingsController::class, 'edit'])->middleware('auth');

//update listing
Route::put('/listings/{listing}', [ListingsController::class, 'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingsController::class, 'destroy'])->middleware('auth');

//manage listings
Route::get('/listings/manage', [ListingsController::class, 'manage'])->middleware('auth');

//single listing
Route::get('/listings/{listing}', [ListingsController::class, 'show']);

//show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);

//user logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);