<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/', [mainController::class, 'main'])->name('site.index');
Route::get('/about', [AboutController::class, 'main'])->name('site.about');
Route::get('/contact', [ContactController::class, 'main'])->name('site.contact'); */
Route::get('/', [ListingsController::class, 'main']);
Route::get('/{id}', [ListingsController::class, 'find']);
/* Route::get('/contact/{name}{surname}', function ($name, $surname) {
    return $name . ' ' . $surname;
}); */

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