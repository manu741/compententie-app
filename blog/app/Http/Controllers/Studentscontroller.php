<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class studentscontroller extends Controller
{
    public function index() {
        $students = User::where('clearance', '=', 'student')->paginate(30);
        return view('studentlist', ['students' => $students]);
    }

    public function student(User $user) {
        return view('student', ['student' => $user]);
    }

}
