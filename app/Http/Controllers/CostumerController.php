<?php

namespace CCONLINE\Http\Controllers;

use Illuminate\Http\Request;

use CCONLINE\Costumer;
use CCONLINE\Http\Requests;
use CCONLINE\Http\Requests\CostumerCreateRequest;
use CCONLINE\Http\Controllers\Controller;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class CostumerController extends Controller
{
    public function __construct()
    {
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route)
    {
        $this->costumer = Costumer::find($route->getParameter('costumer'));
    }

    public function index()
    {
        $costumer = Costumer::paginate(20);
        return view('costumer.index', compact('costumer'));
    }

    public function create()
    {
        return view('costumer.create');
    }

    public function store(CostumerCreateRequest $request)
    {
        Costumer::create
        ([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'telefono_celular' => $request['telefono_celular'],
            'telefono_casa' => $request['telefono_casa'],
            'pais' => $request['pais'],
            'ciudad' => $request['ciudad'],
            'email' => $request['email'],
            'direccion' => $request['direccion'],
            'cp' => $request['cp'],
        ]);
        return redirect('/costumer')->with('message', 'Cliente creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit()
    {
        return view('costumer.edit', ['costumer'=>$this->costumer]);
    }

    public function update(Request $request)
    {
        $this->costumer->fill($request->all());
        $this->costumer->save();
        Session::flash('message','Cliente editado correctamente');
        return Redirect::to('/costumer');
    }

    public function destroy()
    {
        $this->costumer->delete();
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('/costumer');
    }
}
