<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\asignaturas;
use App\Models\temas;

class recordatorios extends Model
{
    use HasFactory;
  
    public function Temas(){
        return $this->belongsTo(temas::class,'id_temas');
    }  public function Asignaturas(){
        return $this->belongsTo(asignaturas::class,'id_asignaturas');

    }
}
