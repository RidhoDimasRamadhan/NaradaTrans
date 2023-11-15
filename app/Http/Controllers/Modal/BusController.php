<?php

namespace App\Http\Controllers\Modal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function busPutih(){
        // dd('ridho');
        return view('/Modal/busPutih',['judul'=>'busPutih']);
    }
}
