<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('/', function () {
    return view('students.form');
});

Route::get('/create', [StudentsController::class, 'create'])->name('create');
Route::post('/store', [StudentsController::class, 'store'])->name('store');
Route::get('/view', [StudentsController::class, 'index'])->name('view');
Route::get('/delete/{id}', [StudentsController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [StudentsController::class, 'update'])->name('update');