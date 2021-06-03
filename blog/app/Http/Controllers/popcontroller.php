<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class popcontroller extends Controller
{
    public function popHome()
    {
        return view('users.pop');
    }
    public function nulSituatie()
    {
        return view('users.nulsituatie');
    }
    public function reflectie()
    {
        return view('users.reflectie');
    }
    public function afspraken()
    {
        return view('users.afspraken');
    }
    public function datapunt()
    {
        return view('users.datapunt');
    }
    public function midterm()
    {
        return view('users.midterm');
    }

}
