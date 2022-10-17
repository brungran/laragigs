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
Route::get('/listings/create', [ListingsController::class, 'create']);

//store listing data
Route::post('/listings', [ListingsController::class, 'store']);

//show edit form
Route::get('/listings/{listing}/edit', [ListingsController::class, 'edit']);

//update listing
Route::put('/listings/{listing}', [ListingsController::class, 'update']);

//delete listing
Route::delete('/listings/{listing}', [ListingsController::class, 'destroy']);

//single listing
Route::get('/listings/{listing}', [ListingsController::class, 'show']);

//show register form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);

//user logout
Route::post('/logout', [UserController::class, 'logout']);

//show login form
Route::get('/login', [UserController::class, 'login']);

//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);