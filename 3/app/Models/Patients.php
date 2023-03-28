<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    // public function staff() {
    //     return $this->belongsTo(Staff::class, 'staff_id', 'id');
    // }
    // public function subject() {
    //     return $this->belongsTo(Subject::class, 'subject_id', 'id');
    // }
    // public function class() {
    //     return $this->belongsTo(Classes::class, 'class_id', 'id');
    // }
}
