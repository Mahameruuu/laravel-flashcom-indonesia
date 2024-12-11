<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_name',
        'course_date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
