<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'class',
        'major',
        'letter',
    ];


    public function subject() {
        return $this->hasOne(subject::class);
    }

    public function assignment() {
        return $this->hasMany(assignment::class);
    }

    public function attendance() {
        return $this->hasMany(attendance::class);
    }

    public function student() {
        return $this->hasMany(Student::class);
    }
}
