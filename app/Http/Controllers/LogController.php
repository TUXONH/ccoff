<?php

namespace CCONLINE\Http\Controllers;

use CCONLINE\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
use CCONLINE\Http\Requests\LogRequest;
use CCONLINE\Http\Requests;
use CCONLINE\Http\Controllers\Controller;

class LogController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route)
    {
        $this->log = User::find($route->getParameter('log'));
    }

    public function index()
    {
        return view('Login.index', compact('log'));
    }

    public function create()
    {

    }

    public function store(LogRequest $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return Redirect::to('admin');
        }
        Session::flash('message-error', 'Datos incorrectos');
        return Redirect::to('/admin');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
