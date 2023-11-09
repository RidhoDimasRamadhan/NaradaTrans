<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hargaController extends Controller
{
    public function harga(){
        return view('/harga',["judul"=>"harga"]);
    }
}
