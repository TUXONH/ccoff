<?php

namespace CCONLINE\Http\Controllers;

use Illuminate\Http\Request;

use CCONLINE\Http\Requests;
use CCONLINE\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function contacto(){
        return view('contacto');
    }
    public function review(){
        return view('review');
    }
}