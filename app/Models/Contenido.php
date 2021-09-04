<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;
use App\Models\Evaluacion;

class Contenido extends Model
{
    use HasFactory;

    public function materia(){
        return $this->hasOne(Materia::class);
    }

    public function evaluacion(){
        return $this->belongsTo(Evaluacion::class);
    }

}
