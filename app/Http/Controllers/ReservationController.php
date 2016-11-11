<?php

namespace CCONLINE\Http\Controllers;

use Illuminate\Http\Request;
use CCONLINE\reservations;
use CCONLINE\Http\Requests;
use CCONLINE\Http\Controllers\Controller;
use DB;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = DB::select('SELECT *FROM reservation_info;');
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view ('reservations.create');
    }
    public function store(Request $request)
    {
        Reservations::create
        ([
            'fecha_venta' => $request['fecha_venta'],
            'id_user' => $request['id_user'],
            'canal' => $request['canal'],
            'departamento' => $request['departamento'],
            'costumer_id' => $request['costumer_id'],
        ]);
        return redirect('/reservations')->with('message', 'store');
    }


    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }
    public function AutoEmail()
    {
        $email = DB::select("select email, id from costumers where email like '%".$_GET["q"]."%'");
        //print_r($email);
        $result = array();
        for($i = 0; $i< sizeof($email); $i++)
        {
            array_push($result, array('label' => $email[$i]->email, 'costumer' => $email[$i]->id));
        }
        $var = json_encode($result);
        return $var;
    }
}
