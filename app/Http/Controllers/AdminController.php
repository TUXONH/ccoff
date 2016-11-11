<?php

namespace CCONLINE\Http\Controllers;

use Illuminate\Http\Request;

use CCONLINE\Http\Requests;
use CCONLINE\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin/index');
    }
}