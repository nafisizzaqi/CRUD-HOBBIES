<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\Hobbies\HobbiesController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/halo', function () {
//     return view('halo');
// });

Route::get('/halo', [HaloController::class, 'coba']);

// Route::get('/hobi', function () {
//     return view("hobi.hobby");
// });

Route::get('/hobi', [HobbiesController::class, 'index'])->name('hobi');
Route::post('/hobi', [HobbiesController::class, 'store'])->name('hobi.post');
Route::put('/hobi/{id}', [HobbiesController::class, 'update'])->name('hobi.update');
Route::delete('/hobi/{id}', [HobbiesController::class, 'destroy'])->name('hobi.delete');




