<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluacion;
class Preguntas extends Model
{
    use HasFactory;
    public function preguntas(){
        return $this->hasOne(Evaluacion::class);
    }
}
