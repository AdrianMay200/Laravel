<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\asignaturas;
use App\Models\notas;
use App\Models\recordatorios;

class temas extends Model
{
    use HasFactory;
    public function Asignaturas(){
        return $this->belongsTo(asignaturas::class,'id_asignaturas');
    }
    public function Notas(){
        return $this->hasMany(notas::class,'id_temas');
    }
    public function Recordatorios(){
        return $this->hasMany(recordatorios::class,'id_temas');
    }
}
