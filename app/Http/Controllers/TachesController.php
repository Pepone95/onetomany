<?php

namespace App\Http\Controllers;
use App\Projet;
use App\Taches;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        $taches = Taches::all();
        return view('welcome', compact('taches', 'projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets= Projet::all();
        return view('/taches.create', compact('projets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taches=new Taches();
        $taches->prenom=request('prenom');
        $taches->projet_id=request('projet_id');
        $taches->name=request('name');
        $taches->description=request('description');
        $taches->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function show(Taches $taches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function edit(Taches $taches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taches $taches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Taches  $taches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taches $taches)
    {
        //
    }
}
