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
    return view('index');
});
Route::get('/buku', 'BukuController@bukutampil');
Route::get('/home',function(){return view('view_home');});
Route::get('/anggota', 'AnggotaController@anggotatampil');
Route::get('/petugas', 'PetugasController@petugastampil');
Route::get('/pinjam', 'PinjamController@pinjamtampil');