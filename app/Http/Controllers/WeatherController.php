<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetWeatherByDayRequest;
use App\Http\Resources\WeatherResource;
use App\Services\WeatherService;
use Carbon\Carbon;

class WeatherController
{
    public function getByDay(GetWeatherByDayRequest $request, WeatherService $service)
    {
        $weatherCollection = $service->getWeatherByDay(Carbon::parse($request->get('day')));

        return WeatherResource::collection($weatherCollection);
    }
}
