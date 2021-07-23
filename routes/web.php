<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\MpeController;
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
Route::get('/login', function () {
   return view('pages/sign-in') ;
});
Route::get('/signup', function () {
   return view('pages/sign-up') ;
});

Route::get('/modal', function () {
   return view('modal') ;
});
Route::get('/', [DashboardController::class, 'index']);

Route::get('/guru', [GuruController::class, 'index']) -> name('guru');

Route::post('/guru/addData', [GuruController::class, 'store']);

Route::post('/guru/editData', [GuruController::class, 'edit']);
route::get('/guru/edit/{id}',[GuruController::class, 'update']);


Route::get('/kriteria', [KriteriaController::class, 'index']);

Route::get('/penilaian', [PenilaianController::class, 'index']);

Route::get('/mpe', [MpeController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);




