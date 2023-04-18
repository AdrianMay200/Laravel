<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\temas;
use App\Models\User;

class recordatorios extends Model
{
    use HasFactory;
  
    public function Temas(){
        return $this->belongsTo(temas::class,'id_temas');
    }  public function User(){
        return $this->belongsTo(User::class,'id_users');

    }
    public $timestamps=false;
}
