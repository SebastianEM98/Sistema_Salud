<?php

namespace App\Models;

use App\Models\Rol;
use App\Models\Treatment;
use App\Models\VitalSign;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'last_name',
        'document_type',
        'document',
        'blood_type',
        'latitude',
        'longitude',
        'email',
        'password',
        'rol_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function tratamientos(){
        return $this->hasMany(Treatment::class, 'id');
    }

    public function signos_vitales(){
        return $this->hasMany(VitalSign::class, 'id');
    }
}
