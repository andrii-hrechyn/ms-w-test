<?php

namespace App\Contracts;

use App\WeatherProviders\Response;

interface WeatherProvider
{
    public function getByCity(string $city): Response;
}
