<?php

use App\Http\Controllers\WeatherController;
use App\Http\Middleware\VerifyApiKey;
use Illuminate\Support\Facades\Route;

Route::get('/weather', [WeatherController::class, 'getByDay'])->middleware([VerifyApiKey::class]);
