<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VitalSign extends Model
{
    use HasFactory;

    protected $fillable = [
        'oximetry',
        'b_frequency',
        'h_rate',
        'temperature',
        'b_pressure',
        'glycemia',
    ];

    public function usuarios(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
