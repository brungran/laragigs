<?php
// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

use App\Http\Controllers\mainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListingsController;

use Illuminate\Support\Facades\Route;

Route::get('/', [ListingsController::class, 'index']);
Route::get('/listings/{listing}', [ListingsController::class, 'show']);

//prefixes
/* Route::prefix('app')->group(function(){
    Route::get('/clients', function () {
        return 'clients';
    })->name('app.clients');
    Route::get('/providers', function () {
        return 'providers';
    })->name('app.providers');
    Route::get('/products', function () {
        return 'products';
    })->name('app.products');
}); */