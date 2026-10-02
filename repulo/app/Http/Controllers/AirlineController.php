<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Http\Requests\StoreAirlineRequest;
use App\Http\Requests\UpdateAirlineRequest;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Airline::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAirlineRequest $request)
    {
        return Airline::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Airline $airline)
    {
        return Airline::find($airline);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airline $airline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAirlineRequest $request, Airline $airline)
    {
        $airline=Airline::find($airline);
        $airline -> fill($request->all());
        $airline -> save();
        return $airline;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airline $airline)
    {
         $airline = Airline::find($airline);
         $airline->delete();
         return $airline;
    }
}
