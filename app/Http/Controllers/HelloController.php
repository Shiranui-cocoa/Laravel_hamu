<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller{
    public function index(){

        $test_1 = "テスト";

        return view("hello",compact('test_1'));
    }

}
