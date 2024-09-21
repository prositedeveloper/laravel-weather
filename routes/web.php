<?php 

use Illuminate\Support\Facades\Route;
use Prositedeveloper\LaravelWeather\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'getWeather']);
Route::get('/weather-form', [WeatherController::class, 'showWeatherForm']);
Route::post('/weather-data', action: [WeatherController::class, 'showWeatherData']);