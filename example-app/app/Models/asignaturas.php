<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\temas;
use App\Models\recordatorios;

class asignaturas extends Model
{
    use HasFactory;

    public function Users(){
        return $this->belongsTo(User::class,'id_users');
    }
    public function Temas(){
        return $this->hasMany(temas::class,'id_asignaturas');
    }
  
    public $timestamps=false;
}
