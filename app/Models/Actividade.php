<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contenido;
use App\Models\Preguntas;

class Actividade extends Model
{
    use HasFactory;
    public function contenido(){
        return $this->hasOne(Contenido::class);
    }
    public function preguntas(){
        return $this->belongsTo(Preguntas::class);
    }
}
