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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::post('/',[App\Http\Controllers\HomeController::class,'login'])->name('authenticate');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'create'])->name('register');
Route::post('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register_save');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::post('/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update.info');
Route::post('/save_info', [App\Http\Controllers\HomeController::class, 'store'])->name('info.save');
Route::get('/generate-pdf/{profileId}', [App\Http\Controllers\PDFController::class, 'generatePDF']);