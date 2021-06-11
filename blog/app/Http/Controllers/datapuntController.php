<?php

namespace App\Http\Controllers;

use App\Models\Competentie;
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
        dd($request);
//        $this->validate($request, [
//            'firstname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
//            'lastname' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
//            'studentnr' => 'required|numeric|digits:7|unique:users',
//            'email' => 'required|email|unique:users|regex:/(.*)student\.hu\.nl$/i|max:255',
//            'password' => 'required|min:7|confirmed',
//        ]);
//
//        User::create([
//            'firstname' => ucwords(strtolower($request->firstname)),
//            'lastname' => ucwords(strtolower($request->lastname)),
//            'studentnr' => $request->studentnr,
//            'email' => strtolower($request->email),
//            'password' => Hash::make($request->password),
//            'clearance' => 'student'
//        ]);
//
//        auth()->attempt($request->only('email', 'password'));
//
//        return redirect()->route('dashboard');
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
