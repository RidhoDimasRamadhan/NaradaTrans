<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\Main_PageController;
use App\Http\Controllers\armadaController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\hargaController;


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

Route::get('/main_page', function () {
    return view('main_page',[
        "judul"=>"/"
    ]);
});
Route::get('/armada',function(){
    return view('armada');
});
Route::get('/galeri',function(){
    return view('galeri');
});
Route::get('/kontak',function(){
    return view('kontak',[
        "judul"=>"kontak"
    ]);
});

Route::get('/armada',[armadaController::class,'armada']);
Route::get('/galeri',[galeriController::class,'galeri']);
Route::get('/profile',[profileController::class,'profile']);
Route::get('/main_page',[Main_PageController::class,'main_page']);
Route::get('/harga',[hargaController::class,'harga']);



