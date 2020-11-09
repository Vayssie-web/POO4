<?php

require_once HightWay;

// namespace MotorWay

final class MotorWay extends HighWay 
{
    private $nbLane = '4';
    private $maxSpeed = '130';

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof car)
            return $this->currentVehicles[] = $vehicle;
    }  
}