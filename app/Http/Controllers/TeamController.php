<?php

namespace App\Http\Controllers;

use App\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // laat lijst van teams zien, open een view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // maak een view (form) om teams in te voeren (en ga dan naar de functie hieronder (store) om het in dbwedprog op te slaan)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // sla de teams op in de database dbwedprog (insert into)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        // laat 1 team zien, in een view die een edit-knop bevat
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        // open de view (form) om een team te wijzigen en ga daarna naar onderstaande functie update om het in de database te wijzigen
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        // verwijder dit team, via bijv een knop in de edit-view of team-lijst
    }
}
