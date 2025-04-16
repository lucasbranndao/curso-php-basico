<?php

require __DIR__ . '/../src/Greetings.php';

$greetings = new Greetings();
echo $greetings->message('John Doe');


?>