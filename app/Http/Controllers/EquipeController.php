<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view("backoffice.equipe.all");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.equipe.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipe = new Equipe();

        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max = $request->max;
        $equipe->ATT = $request->ATT;
        $equipe->CT = $request->CT;
        $equipe->DC = $request->DC;
        $equipe->RP = $request->RP;
        $equipe->continent_id = $request->continent_id;

        $equipe->save();

        return redirect()->route("equipes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view("backoffice.equipe.show", compact("equipe"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        return view("backoffice.equipe.edit", compact("equipe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->max = $request->max;
        $equipe->ATT = $request->ATT;
        $equipe->CT = $request->CT;
        $equipe->DC = $request->DC;
        $equipe->RP = $request->RP;
        $equipe->continent_id = $request->continent_id;

        $equipe->save();

        return redirect()->route("equipes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->back();
    }
}
