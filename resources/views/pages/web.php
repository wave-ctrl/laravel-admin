<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
   return view('pages/dashboard',[
       'title' => 'Dashboard',
       'titlenav' => 'Dashboard'
   ]) ;
});
Route::get('/guru', function () {
   return view('pages/guru',[
       'title' => 'Guru',
       'titlenav' => 'Guru'
   ]) ;
});

Route::get('/kriteria', function () {
   return view('pages/kriteria',[
       'title' => 'Kriteria',
       'titlenav' => 'Kriteria'
   ]) ;
});

Route::get('/penilaian', function () {
   return view('pages/penilaian',[
       'title' => 'penilaian',
       'titlenav' => 'Penilaian'
   ]) ;
});

