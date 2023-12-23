<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
        'github',
        'demo',
    ];
}