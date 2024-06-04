<?php

use App\Console\Commands\GetWeatherByCityCommand;
use Illuminate\Support\Facades\Schedule;

Schedule::command(GetWeatherByCityCommand::class, [config('weather.city')])->hourly();
