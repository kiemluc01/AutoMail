<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function home(){
        return view('layout.home');
    }
}
