@extends('templates.admin.principal')
@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{Session::get('message')}}
        </div>
    @endif
    <h3>Clientes</h3>
    <div class = "box box-info">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Operaciones</th>
                </thead>
                @foreach($users as $user)
                    <tbody>
                        <td>{{$user->nombre}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->tipo}}</td>
                        <td>{!!link_to_route('user.edit', $title = 'editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
                    </tbody>
                 @endforeach
             </table>
            </div>
    </div>
@stop