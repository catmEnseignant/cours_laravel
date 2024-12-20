<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\EtudiantController;

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

Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Route::get('etudiants', [EtudiantController::class,'index'])->name('etudiants.index')->middleware('auth');
// Route::get('etudiants/create', [EtudiantController::class,'create'])->name('etudiants.create');
// Route::post('etudiants/store', [EtudiantController::class,'store'])->name('etudiants.store');
// Route::get('etudiants/edit/{id}', [EtudiantController::class,'edit'])->name('etudiants.edit');
// Route::post('etudiants/update/{id}', [EtudiantController::class,'update'])->name('etudiants.update');
// Route::get('etudiants/destroy/{id}', [EtudiantController::class,'destroy'])->name('etudiants.destroy');

