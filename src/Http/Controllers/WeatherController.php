<?php 

namespace Prositedeveloper\LaravelWeather\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Prositedeveloper\LaravelWeather\Facades\Test;

class WeatherController extends Controller
{
    public function getWeather(Request $request)
    {
        $location = $request->query('location');
        if (!$location)
        {
            return response()->json(['error' => 'Location is required'], 400);
        }

        $weather = Test::location($location);

        return response()->json([
            'celsius' => $weather->getCelsius(),
            'fahrenheit' => $weather->getFahrenheit()
        ]);
    }

    public function showWeatherForm()
    {
        return view('weather::weather-form');
    }

    public function showWeatherData(Request $request)
    {
        $location = $request->input('location');
        $weather = Test::location($location);


        return view('weather::weather-data', [
            'location' => $location,
            'celsius' => $weather->getCelsius(),
            'fahrenheit' => $weather->getFahrenheit()
        ]);
    }
}