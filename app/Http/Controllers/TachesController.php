<?php

namespace App\Http\Controllers;

use App\Taches;
use App\User;
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
        $users = User::all();
        $tachess = Taches::all();
        return view('welcome', compact('tachess', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tachess= Taches::all();
        return view('/taches.create', compact('tachess'));
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
