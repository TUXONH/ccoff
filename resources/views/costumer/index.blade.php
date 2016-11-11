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
                    <th>Apellido</th>
                    <th>Telefono celular</th>
                    <th>Telefono casa</th>
                    <th>Correo</th>
                    <th>Pais</th>
                    <th>Ciudad</th>
                    <th>Direccion</th>
                    <th>CP</th>
                    <th>Operaciones</th>
                </thead>
        @foreach($costumer as $cos)
                <tbody>
                    <td>{{$cos->nombre}}</td>
                    <td>{{$cos->apellido}}</td>
                    <td>{{$cos->telefono_celular}}</td>
                    <td>{{$cos->telefono_casa}}</td>
                    <td>{{$cos->email}}</td>
                    <td>{{$cos->pais}}</td>
                    <td>{{$cos->ciudad}}</td>
                    <td>{{$cos->direccion}}</td>
                    <td>{{$cos->cp}}</td>
                    <td>
                        {!! link_to_route('costumer.edit', 'E', $parameters = $cos->id, $attributes = ['class'=>'btn btn-primary']) !!}
                        {!! link_to_route('reservations.index', 'V', $parameters = $cos->id, $attributes = ['class'=>'btn btn-info']) !!}
                    </td>
                </tbody>
        @endforeach
             </table>
        </div>
    </div>
    {!! $costumer->render() !!}
@stop