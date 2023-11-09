<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class armadaController extends Controller
{
    public function armada(){
        return view('armada',['judul'=>'armada']);
    }
}
