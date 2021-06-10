<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Competentie;
use App\Models\Nulsituatie;
use App\Models\Indicatoren;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;


class NulsituatieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competenties = Competentie::latest()->with(['user']);

        return view('competentie.index', [
            'competenties' => $competenties,
        ]);

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
