<?php

use App\Http\Controllers\CrewController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

// Show dashboard
Route::get('/dashboard', [CrewController::class, 'index'])->middleware('auth');
// Show create form
Route::get('/crews/create', [CrewController::class, 'create'])->middleware('auth');
// Save new crew
Route::post('/crews', [CrewController::class, 'store'])->middleware('auth');
// Show edit form
Route::get('/crews/{crew}/edit', [CrewController::class, 'edit'])->middleware('auth');
// Save edited crew
Route::put('/crews/{crew}', [CrewController::class, 'update'])->middleware('auth');
// Delete crew
Route::get('/crews/{crew}/delete', [CrewController::class, 'destroy'])->middleware('auth');
// Show single crew details
Route::get('/crews/{crew}', [CrewController::class, 'show'])->middleware('auth');


// Show create document form
Route::get('/documents/create/{id}', [DocumentController::class, 'create'])->middleware('auth');
// Save new document
Route::post('/documents', [DocumentController::class, 'store'])->middleware('auth');
// Show edit document form
Route::get('/documents/{document}/edit', [DocumentController::class, 'edit'])->middleware('auth');
// Save edited document
Route::put('/documents/{document}', [DocumentController::class, 'update'])->middleware('auth');
// Delete document
Route::get('/documents/{document}/delete', [DocumentController::class, 'destroy'])->middleware('auth');
// Show single document details
Route::get('/documents/{document}', [DocumentController::class, 'show'])->middleware('auth');


Route::get('/admin', [UserController::class, 'index'])->middleware('auth');
// Show create admin form
Route::get('/register', [UserController::class, 'create'])->middleware('auth');
// Save new admin
Route::post('/user', [UserController::class, 'store'])->middleware('auth');
// Delete admin
Route::get('/users/{user}/delete', [UserController::class, 'destroy'])->middleware('auth');


//Login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');