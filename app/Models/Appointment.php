<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'appointment_date',
        'preference',
        'appointment_time',
        'status',
        'service',
        'remarks',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}