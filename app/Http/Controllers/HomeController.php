<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\BaseResult;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.frontbase');
    }
    public function show(){
        $university="Karabuk University";
        return view('show',['university'=>$university]);
    }
    public function test(){
        return view('home.post');
    }
     public function save(){
      echo "<br>Save Function";
      echo "<br>First name :",$_REQUEST['fname'];
      echo "<br>Last name :",$_REQUEST['lname'];
    }
    public function variable($id,$Key){
        echo "variable:", $id;
        echo "variable 2:",$Key;
        echo "<br>Sum of variables:",$Key+$id;
        return view('home.test2',['id'=>$id,'Key'=>$Key,'Sum'=>$Key+$id]);

    }
}
