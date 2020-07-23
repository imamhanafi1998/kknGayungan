<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
    	return view('blog');
    }
    public function blog1(){
    	return view('blog1');
    }
    public function blog2(){
    	return view('blog2');
    }
}
