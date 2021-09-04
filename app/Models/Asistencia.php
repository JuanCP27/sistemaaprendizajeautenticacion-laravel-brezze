<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo_asistencia;
class Asistencia extends Model
{
    use HasFactory;
    
    public function tipo_asistencias(){
        return $this->belongsTo(Tipo_asistencia::class);
    }


}

