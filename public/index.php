<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../resources/helpers.php';



$uri = $_SERVER['REQUEST_URI'] ?? '/';



$routes = [
    '/'        => 'home',
    '/contact' => 'contact',
];

if (array_key_exists($uri, $routes)) {
    require base_path('src/Controllers/' . $routes[$uri] . '.php');
} else {
    http_response_code(404);
    require base_path('resources/views/404.php');
    die();
}
