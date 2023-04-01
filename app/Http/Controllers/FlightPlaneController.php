<?php

namespace App\Http\Controllers;

use App\Models\FlightPlane;
use Illuminate\Http\Request;

class FlightPlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FlightPlane::all();
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
    public function show(FlightPlane $flightPlane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlightPlane $flightPlane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightPlane $flightPlane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightPlane $flightPlane)
    {
        //
    }
}
