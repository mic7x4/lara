<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, 'index']);

// Show and Create Form
Route::get('/listings/create',[ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings',[ListingController::class, 'store']);

// Show Edit to Update
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

// Update Listing
Route::put('/listings/{listing}',[ListingController::class,'update']);

// Update Listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy']);

// Single Listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

// Show Register/Create Form
Route::get('/register',[UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout',[UserController::class, 'logout']);


// Show login form
Route::get('/login',[UserController::class, 'login']);

// Log in user
Route::post('/users/authenticate',[UserController::class,'authenticate']);