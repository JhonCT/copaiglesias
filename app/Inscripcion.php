<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripcion';
    protected $primaryKey = 'id';

    protected $fillable = [
        '__token', 'nombre', 'paterno', 'materno','dni', 'correo', 'celular', 'iglesia', 'disciplina', 'cantidad', 'archivo', 'costo', 'voucher', 'operacion','estado' 
    ];
}