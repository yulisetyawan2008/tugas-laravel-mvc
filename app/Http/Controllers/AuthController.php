<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(Request $request){
        // var_dump($request);
        // dd($request["alamat"]);
        return view('welcome');
    }

    public function welcome_post(Request $request){
        // dd($request->all());
        $nama = $request["nama_awal"] . " " . $request["nama_akhir"];
        return view('welcome', ["nama" => $nama]);
    }
}
