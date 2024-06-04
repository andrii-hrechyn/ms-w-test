<?php

namespace App\WeatherProviders\OpenWeather;

use App\Contracts\WeatherProvider;
use App\WeatherProviders\OpenWeather\Exception\OpenWeatherException;
use App\WeatherProviders\Response;

class OpenWeather implements WeatherProvider
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client(config('services.openweather.api_key'));
    }

    public function getByCity(string $city): Response
    {
        $geoCoordinates = $this->client->request('/geo/1.0/direct', ['q' => $city, 'limit' => 1]);

        $cityCoordinates = $geoCoordinates[0] ?? null;

        if (!$cityCoordinates) {
            throw new OpenWeatherException('City not found');
        }

        $weather = $this->client->request('/data/2.5/weather', [
            'lat' => $cityCoordinates['lat'],
            'lon' => $cityCoordinates['lon'],
        ]);

        return Formatter::format($weather);
    }
}
