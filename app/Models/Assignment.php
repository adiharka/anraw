<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    public function subject()
    {
        return $this->belongsTo(subject::class);
    }

    public function classroom()
    {
        return $this->hasOne(classroom::class);
    }

    public function complete()
    {
        return $this->hasMany(complete::class);
    }
}
