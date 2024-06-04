<?php

namespace App\Http\Resources;

use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * @var Weather
     */
    public $resource;

    public function toArray(Request $request): array
    {
        return [
            'city'        => $this->resource->city,
            'description' => $this->resource->description,
            'temp'        => $this->resource->temp,
            'wind'        => $this->resource->wind,
            'clouds'      => $this->resource->clouds,
            'created_at'  => $this->resource->created_at->toDateTimeString(),
        ];
    }
}
