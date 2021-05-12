<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'lastname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'studentnr' => 'required|numeric|digits:7|unique:users',
            'email' => 'required|email|unique:users|regex:/(.*)student\.hu\.nl$/i|max:255',
            'password' => 'required|min:7|confirmed',
        ]);

        User::create([
            'firstname' => ucwords(strtolower($request->firstname)),
            'lastname' => ucwords(strtolower($request->lastname)),
            'studentnr' => $request->studentnr,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'clearance' => 'student'
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
