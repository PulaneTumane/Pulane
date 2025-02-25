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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\StudentController;

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::get('students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('students/search', [StudentController::class, 'search'])->name('students.search');
