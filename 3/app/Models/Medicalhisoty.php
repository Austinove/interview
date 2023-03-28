<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicalhisoty extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function patient() {
        return $this->hasOne(Patients::class, 'id', 'patient_id');
    }
}
