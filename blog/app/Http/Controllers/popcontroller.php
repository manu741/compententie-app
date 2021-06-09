<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Competentie;
use App\Models\Indicatoren;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Nulsituatie;

class popcontroller extends Controller
{
    public function popHome()
    {
        return view('users.pop');
    }
    public function nulSituatie()
    {
        

        $indicatoren = Indicatoren::all();
        
        


        $nulsituaties = Nulsituatie::join('competentie', 'competentie.id', '=', 'nulsituatie.competentie_id')
        ->join('users', 'users.id', '=', 'nulsituatie.user_id')
        ->where('nulsituatie.user_id', auth()->User()->id)
        ->get();


        return view('users.nulsituatie', ['nulsituaties' => $nulsituaties], ['indicatoren' => $indicatoren]);
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
