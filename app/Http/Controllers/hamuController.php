<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hamuController extends Controller{
    public function index_hamu(){

        return view('hamu_test');

    }

    public function index_hamu_2(){

        return view('hamu_test_2');
    }
}



?>