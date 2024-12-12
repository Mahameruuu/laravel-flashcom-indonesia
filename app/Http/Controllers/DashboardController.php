<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
        $jumlahStudent = Student::count();
        $jumlahCourse = Courses::count();
        return view('Dashboard', compact('jumlahStudent', 'jumlahCourse'));
    }
}
