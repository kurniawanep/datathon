<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YearlyTemperature;
use App\Models\YearlyRh;
use App\Models\YearlyRainfall;

class DataController extends Controller
{
    public function temp(Request $request)
    {
        // Retrieve data from the request
        $data = $request->json()->all();

        // Check if data is an array
        if (is_array($data) && isset($data[0]['year']) && isset($data[0]['temperature'])) {
            // Handle multiple entries
            foreach ($data as $item) {
                YearlyTemperature::updateOrCreate(
                    ['year' => $item['year']],
                    ['temperature' => $item['temperature']]
                );
            }
        } else {
            // Handle single entry
            $year = $request->input('year');
            $temperature = $request->input('temperature');

            YearlyTemperature::updateOrCreate(
                ['year' => $year],
                ['temperature' => $temperature]
            );
        }

        return response()->json([
            'message' => 'Temperature data received and stored successfully',
            'data' => $data,
        ]);
    }

    public function rh(Request $request)
    {
        // Retrieve data from the request
        $data = $request->json()->all();
        //  return $data;

        // Check if data is an array
        if (is_array($data) && isset($data[0]['year']) && isset($data[0]['rh'])) {
            // Handle multiple entries
            foreach ($data as $item) {
                YearlyRh::updateOrCreate(
                    ['year' => $item['year']],
                    ['rh' => $item['rh']]
                );
            }
        } else {
            // Handle single entry
            $year = $request->input('year');
            $rh = $request->input('rh');

            YearlyRh::updateOrCreate(
                ['year' => $year],
                ['rh' => $rh]
            );
        }

        return response()->json([
            'message' => 'RH data received and stored successfully',
            'data' => $data,
        ]);
    }

    public function rainfall(Request $request)
    {
        // Retrieve data from the request
        $data = $request->json()->all();
        //  return $data;

        // Check if data is an array
        if (is_array($data) && isset($data[0]['year']) && isset($data[0]['precipitation'])) {
            // Handle multiple entries
            foreach ($data as $item) {
                YearlyRainfall::updateOrCreate(
                    ['year' => $item['year']],
                    ['precipitation' => $item['precipitation']]
                );
            }
        } else {
            // Handle single entry
            $year = $request->input('year');
            $precipitation = $request->input('precipitation');

            YearlyRainfall::updateOrCreate(
                ['year' => $year],
                ['precipitation' => $precipitation]
            );
        }

        return response()->json([
            'message' => 'Rainfall data received and stored successfully',
            'data' => $data,
        ]);
    }
}
