<?php

namespace App\Http\Controllers;

use App\Models\Competentie;
use App\Models\Indicatoren;
use Illuminate\Http\Request;

class datapuntController extends Controller
{
    public function index()
    {
        $competenties = Competentie::whereHas('indicatoren', function ($query) {
           $query->where('opleiding_id', auth()->user()->opleiding_id);
        })->get();

        return view('users.datapunt', ['indicatoren' => $competenties]);
    }

    public function GetNiveausAgainstCompetentieDrop($id){
        $indicatoren = Indicatoren::where('competentie_id', $id)->where('opleiding_id', auth()->user()->opleiding_id)->get();
        echo json_encode($indicatoren);
    }
}
