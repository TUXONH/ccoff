<?php

namespace CCONLINE;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    protected $table = "reservations";

    protected $fillable = ["id", "fecha_venta", "id_user", "canal", "departamento", "total_mxn", "tipo_cambio", "estatus_gral", "notas", "costumer_id"];
}
