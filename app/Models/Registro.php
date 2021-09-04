<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluacion;
use App\Models\Materia;

class Registro extends Model
{
    use HasFactory;

    public function evaluacion(){
        return $this->hasOne(Evaluacion::class);
    }
    public function materia(){
        return $this->hasOne(Materia::class);
    }
}
