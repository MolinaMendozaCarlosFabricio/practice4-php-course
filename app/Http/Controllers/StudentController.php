<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Students::all();
        return view('dashboard', compact('students'));
    }
}
