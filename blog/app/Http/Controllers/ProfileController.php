<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function profile(Request $request) {
        $user = User::find(auth()->user()->id);

        if ($request->password != null) {
            $this->validate($request, [
                'firstname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
                'lastname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
                'studentnr' => "required|numeric|digits:7|unique:users,studentnr,$user->id",
                'email' => "required|email|unique:users,email,$user->id|regex:/(.*)student\.hu\.nl$/i|max:255",
                'password' => 'required|min:7|confirmed',
            ]);
        }
        else {
            $this->validate($request, [
                'firstname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
                'lastname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
                'studentnr' => "required|numeric|digits:7|unique:users,studentnr,$user->id",
                'email' => "required|email|unique:users,email,$user->id|regex:/(.*)student\.hu\.nl$/i|max:255",
            ]);
        }

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->studentnr = $request->studentnr;
        $user->email = $request->email;
        if($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('profile');
    }
}
