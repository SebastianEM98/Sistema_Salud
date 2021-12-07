<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'r_name',
    ];

    public function users(){
        return $this->hasMany(User::class, 'id');
    }
}
