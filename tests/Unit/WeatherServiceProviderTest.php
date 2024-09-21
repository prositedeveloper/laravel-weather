<?php 

namespace Prositedeveloper\LaravelWeather\Tests\Unit;

use Prositedeveloper\LaravelWeather\Facades\Test;
use Prositedeveloper\LaravelWeather\Tests\TestCase;
use Prositedeveloper\LaravelWeather\WeatherModel;

class WeatherServiceProviderTest extends TestCase
{
    public function testApiKeyAndLocation()
    {
        $weather = Test::apiKey('f53dbf2f561e47b7824143134242606')->location('Krasnodar');
        $this->assertEquals(25, $weather->getCelsius());
        $this->assertEquals(77, $weather->getFahrenheit());
    }

    public function testGetCelsius()
    {
        $model = new WeatherModel(['temp_c' => 25, 'temp_f' => 77]);
        $this->assertEquals(25, $model->getCelsius());
    }

    public function testGetFahrenheit()
    {
        $model = new WeatherModel(['temp_c' => 25, 'temp_f' => 77]);
        $this->assertEquals(77, $model->getFahrenheit());
    }

}