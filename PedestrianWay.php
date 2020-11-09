<?php

require_once HightWay;

// namespace PedestrianWay

final class PedestrianWay extends HighWay 
{
    private $nbLane = '1';
    private $maxSpeed = '10';

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof bike)
            return $this->currentVehicles[] = $vehicle;
        elseif ($vehicle instanceof skatebord)
            return $this->currentVehicles[] = $vehicle;
    }
}