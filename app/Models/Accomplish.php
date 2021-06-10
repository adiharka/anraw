<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomplish extends Model
{
    use HasFactory;

    public function assignment() {
        return $this->hasOne(assignment::class);
    }

    public function user() {
        return $this->hasOne(user::class);
    }
}
