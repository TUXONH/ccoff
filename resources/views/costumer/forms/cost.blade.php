 <div class = "box-body">
     <div class = "col-md-12">
         <div class = "col-md-4">
       <div class="form-group">
           {!! Form::label('Nombre') !!}
           {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa nombre del cliente'])!!}
       </div>
       <div class="form-group">
           {!! Form::label('Apellido') !!}
           {!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa nombre del cliente'])!!}
       </div>
             </div>
         <div class = "col-md-4">
       <div class="form-group">
           {!! Form::label('Telefono celular') !!}
           {!!Form::text('telefono_celular',null,['class'=>'form-control','placeholder'=>'Ingresa el celular del cliente'])!!}
       </div>
       <div class="form-group">
           {!! Form::label('Telefono casa') !!}
           {!!Form::text('telefono_casa',null,['class'=>'form-control','placeholder'=>'Ingresa el telefono de casa del cliente'])!!}
       </div>
             </div>
         <div class = "col-md-4">
       <div class="form-group">
           {!! Form::label('Correo') !!}
           {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa el correo del cliente'])!!}
       </div>
       <div class="form-group">
           {!! Form::label('Pais') !!}
           {!!Form::text('pais',null,['class'=>'form-control','placeholder'=>'Ingresa el pais de origen del cliente'])!!}
       </div>
             </div>
         <div class = "col-md-4">
       <div class="form-group">
           {!! Form::label('Ciudad') !!}
           {!!Form::text('ciudad',null,['class'=>'form-control','placeholder'=>'Ingresa nombre del cliente'])!!}
       </div>
             </div>
         <div class = "col-md-4">
       <div class="form-group">
           {!! Form::label('Direccion') !!}
           {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa la direccion del cliente'])!!}
       </div>
             </div>
         <div class = "col-md-4">
       <div class="form-group">
           {!! Form::label('CP') !!}
           {!!Form::text('cp',null,['class'=>'form-control','placeholder'=>'Ingresa el cp del cliente'])!!}
       </div>
             </div>
        </div>
 </div>