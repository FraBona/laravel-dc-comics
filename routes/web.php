<?php

use App\Http\Controllers\FumettoController;
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
     return view('guest.index');
 });

//Route::get('/', [FumettoController::class,'index'])->name('home');

Route::get('/fumettos', [FumettoController::class,'index'])->name('fumettos.index');