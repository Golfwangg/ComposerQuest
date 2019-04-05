<?php

require '../vendor/autoload.php';

Use App\Wcs\Hello;
Use HelloWorld\SayHello;

$heyDude = new Hello();

$heyMan = new SayHello();

echo $heyDude->talk();

echo $heyMan->world();