<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Greetings;

$greetings = new Greetings();
echo $greetings->message('John Doe');


?>