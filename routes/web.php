<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home to import
Route::redirect('/', '/import');


// import property
Route::get('/import', [App\Http\Controllers\PropertyController::class,'showImport'])->name('showImport');
Route::post('/import', [App\Http\Controllers\PropertyController::class,'import'])->name('import');
