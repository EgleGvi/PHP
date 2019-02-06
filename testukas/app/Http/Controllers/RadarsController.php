<?php

namespace App\Http\Controllers;

use App\Http\Requests\RadarRequest;
use App\Radar;
use DateTime;
use Illuminate\Http\Request;

class RadarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = new DateTime();
        $radars = Radar::all();
        return view('radars.index', [
            'date' => $date,
            'radars' => $radars
        ]);
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
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function show(Radar $radar)
    {
       return view('radars.show', compact('radar'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function edit(Radar $radar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function update(RadarRequest $request, Radar $radar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Radar  $radar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Radar $radar)
    {
        //
    }
}
