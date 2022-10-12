<?php
require './src/Car.php';
require './src/Bicycle.php';

$bike = new Bicycle('red');

/* echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
 */
$ferrari = new Car('rouge', 2, 'SP 98');
echo $ferrari->start();
echo $ferrari->forward();
echo '<br> Vitesse de la voiture : ' . $ferrari->getSpeed() . ' km/h' . '<br>';
echo $ferrari->brake();
echo '<br> Vitesse de la voiture : ' . $ferrari->getSpeed() . ' km/h' . '<br>';
echo '<br> On à eu chaud !';