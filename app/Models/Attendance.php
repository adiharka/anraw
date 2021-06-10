<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
        
    public function subject() {
        return $this->hasOne(subject::class);
    }
    
    public function classroom() {
        return $this->hasOne(classroom::class);
    }
}
