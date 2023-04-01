<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlightCountryRequest;
use App\Http\Requests\UpdateFlightCountryRequest;
use App\Models\FlightCountry;

class FlightCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = FlightCountry::all();

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
    public function store(StoreFlightCountryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FlightCountry $flightCountry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlightCountry $flightCountry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightCountryRequest $request, FlightCountry $flightCountry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlightCountry $flightCountry)
    {
        //
    }
}
