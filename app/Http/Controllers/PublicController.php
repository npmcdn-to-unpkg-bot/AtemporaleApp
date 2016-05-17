<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{

    public function home(){
        return view('public.home.index');
    }
public function prog1(){
        return view('public.prog1.index');
    }
public function prog2(){
        return view('public.prog2.index');
    }
public function prog3(){
        return view('public.prog3.index');
    }
public function prog4(){
        return view('public.prog4.index');
    }
//add new page

}