<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "Merhaba Laravel";
    }
    public function show(){
        $university="Karabuk University";
        return view('show',['university'=>$university]);
    }
}
