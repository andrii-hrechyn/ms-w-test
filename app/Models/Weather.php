<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $city
 * @property string $description
 * @property int    $temp
 * @property int    $wind
 * @property int    $clouds
 * @property Carbon $created_at
 */
class Weather extends Model
{
    protected $table = 'weathers';

    protected $fillable = [
        'city',
        'description',
        'temp',
        'wind',
        'clouds',
    ];
}
