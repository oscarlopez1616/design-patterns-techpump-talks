<?php
require dirname(__DIR__).'/../vendor/autoload.php';

$speed = new \VO\Practise\Speed(new \VO\Pattern\Natural(10.75),'kilometers');
echo 'speed: '.$speed->getValue()->value().' '.$speed->getUnit();


$speed2 = \VO\Pattern\Speed::createSpeedInMeters( new \VO\Pattern\Natural(1000.40));
echo "\nspeed2: ".$speed2->getValue()->value().' '.$speed2->getUnit();

$speed3 = $speed->addSpeed($speed2);
echo "\nspeed3: ".$speed3->getValue()->value().' '.$speed3->getUnit();
