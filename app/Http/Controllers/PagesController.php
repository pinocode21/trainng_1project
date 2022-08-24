<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function about(){
        $name = "John";
        $coord = ['012', 'Gombe', 'Kinshasa', '854120215'];
        return view('about', ['coord' => $coord])->with('name', $name);
    }
}
