<?php

namespace App\Http\Controllers;

use App\Models\FlightRoute;
use Illuminate\Http\Request;

class FlightRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = FlightRoute::all();
        $data = \DB::select('select * from flight_routes');
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
    public function show(FlightRoute $flightRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlightRoute $flightRoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FlightRoute $flightRoute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightRoute $flightRoute)
    {
        //
    }
}
