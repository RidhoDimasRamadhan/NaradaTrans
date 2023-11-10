<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main_PageController extends Controller
{
    public function main_page(){
        return view('main_page',['judul'=>'main_page']);
    }
}
