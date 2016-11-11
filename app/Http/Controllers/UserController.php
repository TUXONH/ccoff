<?php  namespace CCONLINE\Http\Controllers;

use Illuminate\Http\Request;
use CCONLINE\Http\Requests;
use CCONLINE\Http\Controllers\Controller;
use CCONLINE\User;
use Session;
use Redirect;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::ALL();
        return view('user.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        User::create
        ([
            'nombre' => $request['nombre'],
            'email' => $request['email'],
            'tipo' => $request['tipo'],
            'password' => $request['password'],
        ]);
        return redirect('/user')->with('message', 'store');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario editado correctamente');
        return Redirect::to('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('/user');
    }
}
