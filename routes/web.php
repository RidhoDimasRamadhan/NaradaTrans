<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\Main_PageController;
use App\Http\Controllers\armadaController;


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

Route::get('/armada',[armadaController::class,'armada']);
Route::get('/profile',[profileController::class,'profile']);
Route::get('/main_page',[Main_PageController::class,'main_page']);



