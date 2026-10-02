<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Http\Requests\StoreTravelRequest;
use App\Http\Requests\UpdateTravelRequest;

class TravelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Travel::all();
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
    public function store(StoreTravelRequest $request)
    {
        return Travel::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travel)
    {
        return Travel::find($travel);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Travel $travel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTravelRequest $request, Travel $travel)
    {
        $travel = Travel::find($travel);
        $travel->fill($request->all());
        $travel->save();
        return $travel;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travel)
    {
        $travel = Travel::find($travel);
        $travel->delete();
        return $travel;
    }
}
