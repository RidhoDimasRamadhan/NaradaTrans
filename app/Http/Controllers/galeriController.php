<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galeriController extends Controller
{
    public function galeri(){
        return view('galeri',['judul'=>'galeri']);
    }
}
