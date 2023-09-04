<?php

namespace Core\Middleware;

class Middleware
{

    const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class
    ];


    public static function resolve($key)
    {
        if (!isset(static::MAP[$key])) {
            throw new \Exception("Undefined middleware used '{$key}'.");
        }

        $middleware = static::MAP[$key];

        (new $middleware)->handel();
    }
}
