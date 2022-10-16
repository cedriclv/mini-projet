<?php

//require __DIR__ . '/../src/Hello.php';

require __DIR__ . '/../vendor/autoload.php';

$var1 = new App\Hello();

echo ($var1->talk());
