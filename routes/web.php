<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index'])->name('home');

Route::get('/student/create', function () {
    return view('create');
});
Route::post('/student/create', [StudentController::class, 'store'])->name('create');

Route::get('/student/{id}/edit', [StudentController::class, 'show']);
Route::post('/student/{id}/edit', [StudentController::class, 'update'])->name('edit');

Route::get('/student/{id}/delete', [StudentController::class, 'destroy']);
