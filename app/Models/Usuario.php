<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;
class Usuario extends Model
{
    use HasFactory;
    public function rol(){
        return $this->hasOne(Rol::class);
    }

}
