<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asistencia;

class Tipo_asistencia extends Model
{
    use HasFactory;
    public function asistencia(){
        return $this->hasOne(Asistencia::class);
    }
}
