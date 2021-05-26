<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Joueur;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continents = Continent::all()->random(4);
        return view("bakcoffice.joueur.all", compact("continents"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.joueur.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $joueur = new Joueur();

        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->numero = $request->numero;
        $joueur->pays = $request->pays;
        $joueur->photo_id = $request->photo_id;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;

        $joueur->save();

        return redirect()->route("joueurs.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view("backoffice.joueur.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        return view("backoffice.joueur.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->numero = $request->numero;
        $joueur->pays = $request->pays;
        $joueur->photo_id = $request->photo_id;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;

        $joueur->save();

        return redirect()->route("joueurs.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();
        return redirect()->back(); 
    }
}
