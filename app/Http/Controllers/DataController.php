<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YearlyTemperature;

class DataController extends Controller
{
    public function temp(Request $request)
    {
        // Retrieve data from the request
        $year = $request->input('year');
        $temperature = $request->input('temperature');

        // Store the data without validation
        $yearlyTemperature = YearlyTemperature::updateOrCreate(
            ['year' => $year],
            ['temperature' => $temperature]
        );

        return response()->json([
            'message' => 'Temperature data received and stored successfully',
            'data' => $yearlyTemperature,
        ]);
    }
}
