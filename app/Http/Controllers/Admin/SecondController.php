<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth')->except('show1');
    }
    public function show1()
    {
        return "this is show1";
    }

    public function show2()
    {
        return "this is show2";
    }

    public function show3()
    {
        return "this is show3";
    }
}
