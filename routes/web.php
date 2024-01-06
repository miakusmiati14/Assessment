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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::Resource('mahasiswa', App\Http\Controllers\MahasiswaController::class);
Route::Resource('dosen', App\Http\Controllers\DosenController::class);
Route::Resource('matakuliah', App\Http\Controllers\MatakuliahController::class);
Route::Resource('program_studi', App\Http\Controllers\ProgramStudiController::class);
