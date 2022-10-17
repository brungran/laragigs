<?php
// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

use App\Http\Controllers\ListingsController;

use Illuminate\Support\Facades\Route;

//all listings
Route::get('/', [ListingsController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingsController::class, 'create']);

//store listing data
Route::post('/listings', [ListingsController::class, 'store']);

//show edit form
Route::get('/listings/{listing}/edit', [ListingsController::class, 'edit']);

//edit submit to update
Route::put('/listings/{listing}', [ListingsController::class, 'update']);

//single listing
Route::get('/listings/{listing}', [ListingsController::class, 'show']);