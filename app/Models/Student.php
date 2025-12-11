<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // IMPORTANT: This allows mass assignment for these fields
    protected $fillable = [
        'name',
        'email',
        'course',
        'enrollment_date'
    ];

    protected $casts = [
        'enrollment_date' => 'date'
    ];
}