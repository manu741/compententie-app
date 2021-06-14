<?php

namespace App\Http\Controllers;

use App\Models\Competentie;
use App\Popreflectie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class ReflectieController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index(Request $request)
    {
        $competenties = DB::table('competentie')
            ->join('indicatoren', 'indicatoren.competentie_id', '=', 'competentie.id' )
            ->get();


        $reflecties = DB::table('opleiding')
            ->join('competentie','competentie.id', '=', 'opleiding.competentie_id')
            ->join('users', 'users.opleiding_id', '=', 'opleiding.id')
            ->join('indicatoren', 'indicatoren.competentie_id', '=', 'competentie.id')
            ->where('opleiding.id', '=', auth()->User()->opleiding_id)
            ->get();
//        dd($competenties);
        return view('users.reflectie', ['reflecties' => $reflecties], ['competenties' => $competenties]);

    }

    public function update(Request $request)
    {
        $data = Popreflectie::find($request->id);

        $data->popcyclusdatum_id = $request->popcyclusdatum_id;
        $data->soort = $request->soort;
        $data->methode = $request->methode;
        $data->situatie = $request->situatie;
        $data->taak = $request->taak;
        $data->actie = $request->actie;
        $data->resultaat = $request->title;
        $data->body = $request->body;

        $data->save();
    }

    public function show(Popreflectie $popreflectie)
    {
        $popreflectie = DB::table('popreflectie')
            ->select('*')
            ->where('id', '=', $popreflectie->id)
            ->get();

        return view('reflectie.show', [
            'reflectie' => $popreflectie,
//            Voor later gebruik weergave
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'soort' => 'required',
        ]);

        $save = new Popreflectie;

        $save->popcyclusdatum_id = $request->title;
        $save->soort = $request->soort;
        $save->methode = $request->methode;
        $save->situatie = $request->situatie;
        $save->taak = $request->taak;
        $save->actie = $request->actie;
        $save->resultaat = $request->resultaat;
        $save->reflectie = $request->reflectie;


//        dd($save);

        $save->save();

        return redirect()->back()->with('message', 'De post word binnen 1-2 werkdagen goedgekeurd');

    }

    public function destroy(PopReflectie $popreflectie)
    {
        $this->authorize('delete', $popreflectie);

        $popreflectie->delete();

        return back();
    }
}
