<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YearlyTemperature;
use App\Models\YearlyRh;
use App\Models\YearlyRainfall;

class DashboardController extends Controller
{
    public function getTemp()
    {
        // Retrieve data from the database
        $temperatures = YearlyTemperature::all();

        // Return the data as JSON
        return response()->json([
            'message' => 'Temperature data retrieved successfully',
            'data' => $temperatures,
        ]);
    }

    public function getRh()
    {
        // Retrieve data from the database
        $rh = YearlyRh::all();

        // Return the data as JSON
        return response()->json([
            'message' => 'RH data retrieved successfully',
            'data' => $rh,
        ]);
    }

    public function getRainfall()
    {
        // Retrieve data from the database
        $rainfall = YearlyRainfall::all();

        // Return the data as JSON
        return response()->json([
            'message' => 'Rainfall data retrieved successfully',
            'data' => $rainfall,
        ]);
    }
}
