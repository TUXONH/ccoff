@extends('templates.admin.principal')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role = "alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono celular</th>
        <th>Telefono casa</th>
        <th>Correo</th>
        <th>Pais</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>CP</th>
        </thead>
        @foreach($users as $user)
            <tbody>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{!!link_to_route('user.edit', $title = 'editar', $parameters = $user->id_costumer, $attributes = ['class'=>'btn btn-primary'])!!}</td>
            </tbody>
        @endforeach
    </table>
@stop