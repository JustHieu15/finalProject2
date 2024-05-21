<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Test extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'test';

    protected $fillable = [
        'name',
        'description',
        'time_limit',
        'course_id',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'unique' => 'true',
            ]
        ];
    }

    public $timestamps = false;
}
