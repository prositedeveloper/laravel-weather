<?php 

namespace Prositedeveloper\LaravelWeather;

class Weather 
{
    protected $location;

    public function location($location)
    {
        $this->location = $location;
        return $this->getWeatherData();
    }

    protected function getWeatherData()
    {
        $apiKey = config('weather.api_key');
        $url = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$this->location}";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        return new WeatherModel([
            'temp_c' => $data['current']['temp_c'],
            'temp_f' => $data['current']['temp_f']
        ]);
    }
}

class WeatherModel 
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getCelsius()
    {
        return $this->data['temp_c'];
    }

    public function getFahrenheit()
    {
        return $this->data['temp_f'];
    }
}