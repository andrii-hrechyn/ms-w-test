<?php

namespace App\Console\Commands;

use App\Services\WeatherService;
use Illuminate\Console\Command;

class GetWeatherByCityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:city:get {city}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get weather by city';

    /**
     * Execute the console command.
     */
    public function handle(WeatherService $service)
    {
        $service->saveCurrentWeatherForCity($this->argument('city'));
    }
}
