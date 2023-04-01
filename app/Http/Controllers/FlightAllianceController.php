<?php

namespace App\Http\Controllers;

use App\Models\FlightAlliance;
use Illuminate\Http\Request;

class FlightAllianceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FlightAlliance::all();
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
    public function show(FlightAlliance $flightAlliance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlightAlliance $flightAlliance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightAlliance $flightAlliance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightAlliance $flightAlliance)
    {
        //
    }
}
