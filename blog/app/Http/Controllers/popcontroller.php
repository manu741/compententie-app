<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Competentie;
use App\Models\Indicatoren;
use App\Models\Nulsituatie;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class popcontroller extends Controller
{
    public function popHome()
    {
        return view('users.pop');
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
