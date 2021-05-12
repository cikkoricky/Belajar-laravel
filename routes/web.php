<?php
use App\Http\Controllers;
use App\Http\Controllers\Kendali;
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

Route::get('/', [Kendali::class ,'index']);

Route::view('/siswa','siswa');

Route::get('/simpan',[Kendali::class,'simpan']);

Route::get('/update',[Kendali::class,'update']);

Route::get('/edit/{nis}',[Kendali::class,'edit']);

Route::get('/hapus/{nis}',[Kendali::class,'hapus']);

