<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController 
{
    public function index()
    {
        $courses = Courses::with('student')->get();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $students = Student::all();
        return view('courses.create', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_name' => 'required|string|max:255',
            'course_date' => 'required|date',
        ]);

        Courses::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course added successfully!');
    }

    public function edit(Courses $course)
    {
        $students = Student::all();
        return view('courses.edit', compact('course', 'students'));
    }

    public function update(Request $request, Courses $course)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_name' => 'required|string|max:255',
            'course_date' => 'required|date',
        ]);

        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    public function destroy(Courses $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
    }
}
