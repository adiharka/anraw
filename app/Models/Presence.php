<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    
    public function attendace() {
        return $this->hasOne(attendace::class);
    }

    public function user() {
        return $this->hasOne(user::class);
    }
}
