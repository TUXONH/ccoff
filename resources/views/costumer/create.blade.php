@extends('templates.admin.principal')
@section('content')
    @include('alerts.requestC')
    {!!Form::open(['route'=>'costumer.store','method'=>'POST'])!!}
    <h3>Creacion de cliente</h3>
    <div class = "box box-info">
         @include('costumer.forms.cost')
        {!!Form::submit('Agregar',['class'=>'btn btn-block btn-primary btn-sm'])!!}
    </div>
    {!!Form::close()!!}
@stop
