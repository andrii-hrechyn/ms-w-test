<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class VerifyApiKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = config('auth.api_key');

        if (!$apiKey || $apiKey !== $request->header('x-token')) {
            throw new HttpException(Response::HTTP_UNAUTHORIZED, 'Invalid API key');
        }

        return $next($request);
    }
}
