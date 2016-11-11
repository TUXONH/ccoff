<div class = "box box-info">
    <div class = "box-body">
        <div class = "col-md-12">
            <div class="col-md-4" ></div>
            <div class="col-md-4" >
                <div class="form-group">
                    {!!Form::label('Usuario')!!}
                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre de ususario'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('Correo')!!}
                    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('Tipo')!!}
                    {!! Form::select('tipo', array('admin' => 'Administrador', 'asesor' => 'Asesor'), null) !!}
                </div>
                <div class="form-group">
                    {!!Form::label('Contraseña')!!}
                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
                </div>
            </div>
        </div>
    </div>
</div>