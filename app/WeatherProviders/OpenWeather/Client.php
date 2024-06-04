<?php

namespace App\WeatherProviders\OpenWeather;

use Illuminate\Support\Facades\Http;

class Client
{
    const URL = 'https://api.openweathermap.org/';
    protected string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function request(string $route, array $params = []): array
    {
        return Http::get($this->prepareUrl($route), [
            'appid'  => $this->apiKey,
            'lang'   => 'en',
            ...$params,
        ])->json();
    }

    private function prepareUrl(string $route): string
    {
        return self::URL.'/'.ltrim($route, '/');
    }
}
