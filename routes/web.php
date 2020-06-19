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

//Dashboard admin
Route::get('/','DashboardController@dashboard');

//admin -> manajemen Mahasiswa
Route::get('/admin/mahasiswa','AdminController@index_mhs');
Route::get('/admin/mahasiswa/create','AdminController@create_mhs');
Route::get('/admin/mahasiswa/{mahasiswa}','AdminController@show_mhs');
Route::post('/admin/mahasiswa','AdminController@store_mhs');
Route::delete('/admin/mahasiswa/{mahasiswa}','AdminController@destroy_mhs');
Route::get('/admin/mahasiswa/{mahasiswa}/edit','AdminController@edit_mhs');
Route::patch('/admin/mahasiswa/{mahasiswa}','AdminController@update_mhs');

Route::get('/dosen','DosenController@dosen');
Route::get('/kelas','KelasController@kelas');
Route::get('/matakuliah','MatakuliahController@matakuliah');
Route::get('/materi','MateriController@materi');
Route::get('/tugas','TugasController@tugas');