<?php

namespace App\WeatherProviders;

class Response
{
    protected string $description;
    protected float $temp;
    protected float $wind;
    protected float $clouds;

    public function __construct(string $description, float $temp, float $wind, float $clouds)
    {
        $this->description = $description;
        $this->temp = $temp;
        $this->wind = $wind;
        $this->clouds = $clouds;
    }

    public function toArray(): array
    {
        return [
            'description' => $this->description,
            'temp'        => $this->temp,
            'wind'        => $this->wind,
            'clouds'      => $this->clouds,
        ];
    }
}
