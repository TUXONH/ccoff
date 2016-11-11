@extends('templates.admin.principal')
@section('content')
    {!!Form::model($costumer,['route'=>['costumer.update',$costumer->id],'method'=>'PUT'])!!}
    <h3>Edicion de cliente</h3>
    <div class = "box box-info">
        @include('costumer.forms.cost')
        {!!Form::submit('Actualizar',['class'=>'btn-primary'])!!}
        {!!Form::close()!!}
        {!!Form::open(['route'=>['costumer.destroy',$costumer->id],'method'=>'DELETE'])!!}
        {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    </div>
    {!!Form::close()!!}
@stop

