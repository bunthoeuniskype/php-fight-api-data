<?php

namespace App\Http\Controllers;

use App\Models\FlightAirline;
use Illuminate\Http\Request;

class FlightAirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FlightAirline::all();
        return response()->json($data, 200);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightAirline $flightAirline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlightAirline $flightAirline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightAirline $flightAirline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightAirline $flightAirline)
    {
        //
    }
}
