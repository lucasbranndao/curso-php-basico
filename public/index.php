<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../resources/helpers.php';


$tile = 'My Website';
$heading = 'Home';

require __DIR__ . '/../resources/views/index.php';

$uri = $_SERVER['REQUEST_URI'] ?? '/';



$routes = [
    '/' => 'home.php',
    '/contact' => 'contact.php',
];

if (array_key_exists($uri, $routes)) {
    require base_path('src/Controllers/' . $routes[$uri] . '.php');
} else {
    http_response_code(404);
    echo '404 Not Found';
    die();
}
