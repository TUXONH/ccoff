@extends('templates.admin.principal')
@section('content')
    {!!Form::open(['route'=>'user.store','method'=>'POST'])!!}
    <h3>Creacion de cliente</h3>
                @include('user.forms.usr')
                {!!Form::submit('Agregar',['class'=>'btn-primary'])!!}
       {!!Form::close()!!}
   @stop