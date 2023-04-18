<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\notas;
use App\Models\ingenieria;
use App\Models\asignaturas;
use App\Models\recordatorios;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public function Ingenierias(){
        return $this->belongsTo(ingenieria::class,'id_ingenierias');
    }
    public function Notas(){
        return $this->hasMany(notas::class,'id_users');
    }
    public function Asignaturas(){
        return $this->hasMany(asignaturas::class,'id_users');
    }
    public function Recordatorios(){
        return $this->hasMany(recordatorios::class,'id_asignaturas');
    }
    public $timestamps=false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
