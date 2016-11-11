@extends('templates.admin.principal')
@section('content')
    {!!Form::open(['route'=>'reservations.store','method'=>'POST'])!!}
    <div class="form-group">
        {!! Form::label('Venta') !!}
        {!!Form::text('venta',null,['class'=>'form-control','placeholder'=>'Ingresa '])!!}
    </div>
    <div class="form-group">
        {!! Form::label('canal') !!}
        {!!Form::text('canal',null,['class'=>'form-control','placeholder'=>'Ingresa '])!!}
    </div>

    <div class="form-group">
        {!! Form::label('asensor') !!}
        {!!Form::text('asesor',null,['class'=>'form-control','placeholder'=>'Ingresa '])!!}
    </div>

    <div class="form-group">
        {!! Form::label('pago') !!}
        {!!Form::text('pago',null,['class'=>'form-control','placeholder'=>'Ingresa '])!!}
    </div>
    {!!Form::submit('Agregar',['class'=>'btn-primary'])!!}
    {!!Form::close()!!}
@stop