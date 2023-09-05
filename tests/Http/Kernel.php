<?php

namespace Tyjow\ActiveTest\Http;

class Kernel extends \Orchestra\Testbench\Http\Kernel
{
    protected $routeMiddleware = [
        'dump' => DumpMiddleware::class,
    ];
}