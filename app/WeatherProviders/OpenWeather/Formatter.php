<?php

namespace App\WeatherProviders\OpenWeather;

use App\WeatherProviders\OpenWeather\Exception\OpenWeatherException;
use App\WeatherProviders\Response;

class Formatter
{
    public static function format(array $response): Response
    {
        $weather = $response['weather'][0] ?? null;

        if (!$weather) {
            throw new OpenWeatherException('Weather is missing');
        }

        return new Response(
            $weather['description'],
            $response['main']['temp'],
            $response['wind']['speed'] ?? 0,
            $response['clouds']['all'] ?? 0
        );
    }
}
