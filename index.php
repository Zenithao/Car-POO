<?php
require 'Car.php';

$renault = new Car('blue', 7, 'Diesel');

echo $renault->start();
echo $renault->forward();
echo $renault->forward();
echo $renault->forward();
echo $renault->brake();

echo var_dump($renault);
