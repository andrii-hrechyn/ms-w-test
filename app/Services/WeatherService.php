<?php

namespace App\Services;

use App\Contracts\WeatherProvider;
use App\Models\Weather;
use Carbon\Carbon;
use Illuminate\Support\Collection;

readonly class WeatherService
{
    public function __construct(
        private WeatherProvider $weatherProvider
    ) {

    }

    public function getWeatherByDay(Carbon $day): Collection
    {
        return Weather::query()->whereDate('created_at', $day)->get();
    }

    public function saveCurrentWeatherForCity(string $city): Weather
    {
        $currWeather = $this->weatherProvider->getByCity($city);

        return $this->create($city, $currWeather->toArray());
    }

    public function create(string $city, array $attributes): Weather
    {
        $weather = new Weather($attributes);
        $weather->city = $city;
        $weather->save();

        return $weather;
    }
}
