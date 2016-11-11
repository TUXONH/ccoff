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
    <h3>Reservaciones</h3>
    <div class = "box box-info">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th>Folio</th>
                    <th>Fecha de venta</th>
                    <th>Canal</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Servicio</th>
                    <th>Fecha de llegada</th>
                    <th>Fecha de salida</th>
                    <th>Fecha Limite de Pago</th>
                    <th>Adultos</th>
                    <th>Niños</th>
                    <th>Pago del cliente</th>
                    <th>Confirmacion del proveedor</th>
                    <th>Estatus general</th>
                    <th>Total MXN</th>
                    <th>Total USD</th>
                    <th>Tipo de cambio</th>
                    <th>Asesor</th>
                    <th>Pais</th>
                    <th>Departamento</th>
                    <th>Operaciones</th>
                </thead>
                @foreach($reservations as $res)
                    <tbody>
                    <?php
                    $total_usd = ($res->total_mxn) * ($res->tipo_cambio);
                    ?>
                    <td>CC0{{$res->id}}</td>
                    <td>{{$res->fecha_venta}}</td>
                    @if($res->canal == "O")
                        <td>Offline</td>
                        @elseif($res->canal == "Ch")
                        <td>Chat</td>
                    @elseif($res->canal == "T")
                        <td>Telefono</td>
                    @elseif($res->canal == "C")
                        <td>Corporativo</td>
                    @elseif($res->canal == "M")
                        <td>MCorreo</td>
                    @elseif($res->canal == "A")
                        <td>Asosiado</td>
                    @elseif($res->canal == "R")
                        <td>Redes Sociales</td>
                    @endif
                    <td>{{$res->cliente}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$res->estatus_gral}}</td>
                    <td>{{$total_usd}}</td>
                    <td>{{$res->total_mxn}}</td>
                    <td>{{$res->tipo_cambio}}</td>
                    <td>{{$res->nombre}}</td>
                    <td>{{$res->pais}}</td>
                    @if($res->departamento == "CC")
                        <td>Call Center</td>
                    @elseif($res->departamento == "A")
                        <td>Agencia</td>
                    @elseif($res->departamento == "C")
                        <td>Corporativos</td>
                    @elseif($res->departamento == "O")
                        <td>Online</td>
                        @endif
                    <td>
                        {!! link_to_route('reservations.edit', 'E', $parameters = $res->id, $attributes = ['class'=>'btn btn-info']) !!}
                        {!! link_to_route('reservations.index', 'V', $parameters = $res->id, $attributes = ['class'=>'btn btn-info']) !!}
                    </td>
                    </tbody>
                @endforeach
            </table>
            </table>
    </div>
    </div>
@stop
