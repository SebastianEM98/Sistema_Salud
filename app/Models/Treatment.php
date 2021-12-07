<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        't_name',
        'description',
        'user_id',
    ];

    public function usuarios(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
