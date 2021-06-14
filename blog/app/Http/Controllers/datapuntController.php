<?php

namespace App\Http\Controllers;

use App\Models\Competentie;
use App\Models\Datapunten;
use App\Models\Indicatoren;
use Illuminate\Http\Request;

class datapuntController extends Controller
{
    public function index() {
        $competenties = Competentie::whereHas('indicatoren', function ($query) {
           $query->where('opleiding_id', auth()->user()->opleiding_id);})->get();
        return view('users.datapunt', ['competenties' => $competenties]);
    }

    public function emptyDatapunt(Request $request) {
//        dd($request->niveau);
        $this->validate($request, [
            'competentie' => 'required',
            'niveau' => 'required',
            'naam' => 'required',
        ]);

        Datapunten::create([
            'indicator_id' => $request->niveau,
            'user_id' => auth()->user()->id,
            'naam' => $request->naam,
            'bevroren' => False,
        ]);

        return redirect()->route('dashboard');
    }

    public function GetNiveausAgainstCompetentieDrop($id){
        $niveaus = Indicatoren::where('competentie_id', $id)->where('opleiding_id', auth()->user()->opleiding_id)->get();
        echo json_encode($niveaus);
    }

    public function GetIndicatorAgainstNiveau($id) {
        $indicator = Indicatoren::select('indicator')->where('id', $id)->first();
        echo json_encode($indicator);
    }
}
