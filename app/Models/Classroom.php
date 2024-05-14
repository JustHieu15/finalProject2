<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'class';

    protected $fillable = [
        'name',
        'number_student',
        'semester_id'
    ];

    public $timestamps = false;
}
