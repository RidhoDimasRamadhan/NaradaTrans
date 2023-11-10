<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
        // dd('ridho dimas');
        return view('profile',['judul'=>'profile']);
    }
}
