<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class studentscontroller extends Controller
{
    public function index() {
        $students = User::where('clearance', '=', 'student')->paginate(30);
        return view('students', ['students' => $students]);
    }

}
