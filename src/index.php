<?php

require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$car = new Car('yellow', 5, 'electric');
$bicycle = new Bicycle('red', 1);

//$bicycle->forward();

var_dump($bicycle->switchOn());
