<?php 

namespace Prositedeveloper\LaravelWeather\Facades;

use Illuminate\Support\Facades\Facade;
use Prositedeveloper\LaravelWeather\Weather;

class Test extends Facade
{
    protected static function getFacadeAccessor()
    {
           return Weather::class; 
    }
}