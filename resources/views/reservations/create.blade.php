@extends('templates.admin.principal')
@section('content')
    {!!Form::open(['route'=>'reservations.store','method'=>'POST'])!!}
    <h3>Creacion de Reservacion</h3>
    <div class = "box box-info">
        <div class = "box-body">
            <div class = "col-md-12">
                <div class = "col-md-6">
                     <div class="form-group">
                        {!! Form::label('Asesor') !!}
                        {!!Form::text('id_user', Auth::user()->nombre, ['class'=>'form-control', 'disabled'=>'disabled'])!!}
                         <div class = "row-ms-2">
                            {!! Form::label('Canal') !!}
                            {!!Form::select('canal', array('Ch' => 'Chat', 'T' => 'Telefono', 'C' => 'Corporativos', 'O' => 'Online', 'M'=>'Mail', 'A'=>'Asociado', 'R' => 'Redes sociales'), null, ['class' => 'btn btn-primary dropdown-toggle'])!!}
                             {!! Form::label('Departamento') !!}
                             {!!Form::select('departamento', array('CC' => 'Call center', 'A' => 'Agencia', 'C' => 'Corporativos', 'O' => 'Online'), null, ['class' => 'btn btn-primary dropdown-toggle'])!!}
                         </div>
                     </div>
                </div>
                <div class="col-md-6">
                    <?php
                        $mytime = Carbon\Carbon::now();
                    ?>
                    {!! Form::hidden('fecha_venta',$mytime->toDateTimeString(),['class' =>'form-control']) !!}
                    {!! Form::hidden('costumer_id', null, array('id' => 'costumer_id'))!!}
                    {!! Form::hidden('id_user', Auth::user()->id, array('id' => 'id_user'))!!}
                    {!! Form::label('Correo del Cliente') !!}
                    {!!Form::text('correo',null,['class'=>'form-control correo','placeholder'=>'Ingresa el correo del cliente si esta registrado'])!!}
                    {!!Form::submit('Agregar',['class'=>'btn-primary'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@stop