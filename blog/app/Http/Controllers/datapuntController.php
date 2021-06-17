<?php

namespace App\Http\Controllers;

use App\Models\Beroepsproduct;
use App\Models\Competentie;
use App\Models\Datapunten;
use App\Models\Indicatoren;
use App\Models\Onderwijseenheid;
use App\Models\Opdrachtgever;
use Illuminate\Http\Request;

class datapuntController extends Controller
{
    public function index() {
        $user = auth()->user();

        $data = array(
            'competenties' => Competentie::whereHas('indicatoren', function ($query) {
                $query->where('opleiding_id', auth()->user()->opleiding_id);})->get(),
            'datapunten' => Datapunten::where('user_id', $user->id)->with('indicatoren.competenties')->get(),
            'onderwijseenheden' => Onderwijseenheid::where('opleiding_id', $user->opleiding_id)->get(),
            'opdrachtgevers' => Opdrachtgever::get(),
            'beroepsproducten' => Beroepsproduct::get()
        );
//        foreach($data['datapunten'] as $data) {
//            dd($data->opdrachtgever->voornaam);
//        }

        return view('users.datapunt', $data);
    }

    public function emptyDatapunt(Request $request) {
//        dd($request->niveau);
        $this->validate($request, [
            'naam' => 'required',
            'competentie' => 'required',
            'niveau' => 'required',
        ]);

        Datapunten::create([
            'indicator_id' => $request->niveau,
            'user_id' => auth()->user()->id,
            'naam' => $request->naam,
            'bevroren' => False,
        ]);

        return redirect()->back();
    }

    public function saveDatapoint(Request $request, $id) {
//        dd($request);
        $datapunt = Datapunten::find($id);

        $datapunt->onderwijseenheid_id = $request->onderwijseenheid;
        $datapunt->opdrachtgever_id = $request->opdrachtgever;
        $datapunt->beroepsproduct_id = $request->beroepsproduct;
        $datapunt->onderbouwing = $request->onderbouwing;
        $datapunt->feedback = $request->feedback;
        $datapunt->feedup = $request->feedup;
        $datapunt->feedforward = $request->feedforward;

        $datapunt->save();
        return redirect()->back();

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
