<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function achievement(){
        return view('pages.achievement');
    }

    public function admin(){
        return view('admin.index');
    }
}
