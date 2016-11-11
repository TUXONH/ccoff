<?php

namespace CCONLINE;

use Illuminate\Database\Eloquent\Model;

class  Costumer extends Model
{
    protected $table = "costumers";

    protected $fillable = ['id', 'telefono_celular', 'telefono_casa', 'nombre', 'apellido', 'email', 'direccion', 'cp', 'pais', 'ciudad'];
}
