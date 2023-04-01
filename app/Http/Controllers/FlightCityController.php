<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightCity;

class FlightCityController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = FlightCity::all();
      return response()->json($data, 200);
    }
}
