<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index (){
        // $students = Student::limit(20)->get();
        $students = Student::limit(20)->orderBy('name')->where('surname', 'Amato')->get();
        // $student = Student::find(100);
        $student = Student::where('name', 'Rocco')->first();
        // dump($students);

        return view('students', compact('students', 'student'));
    }
}
