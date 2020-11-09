<?php

//                  CARS              //

require_once 'Car.php';
use Car;

$ferrari= new Car ('blue', 4, 'fuel');
$ferrari->setParkBrake(true);
var_dump($ferrari);
try {
    echo $ferrari->start();
}
catch(Exception $e) {
    echo "Exception received: ". $e->getMessage() . '<br>';
    $ferrari->setParkBrake(false);
}
finally {
    echo "My car's rolling like a donut !";
}
var_dump($ferrari);
