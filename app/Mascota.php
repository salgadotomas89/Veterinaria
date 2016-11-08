<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable=['rut','especie','raza','caracter','fecha','peso','temperatura'];
}
