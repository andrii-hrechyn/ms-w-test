## Route for getting weather 

```
GET {domain}/api/weather?day=2024-06-04
```

## Command for getting current weather from provider (OpenWeather)

```shell
php artisan weather:city:get {city}
```

## .env

- WEATHER_CITY=Rzeszow - City which will be used for collecting weather
- OPENWEATHER_API_KEY=XXXXXXXXXXXXXXXXX - OpenWeather API key
- API_KEY=XXXXXXXXXXXXXXX - Internal API key which needs to be sent in x-token header 
