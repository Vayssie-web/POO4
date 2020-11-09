<?php

require_once HightWay;

// namespace ResidentialWay

final class ResidentialWay extends HighWay 
{
    private $nbLane = '2';
    private $maxSpeed = '50';

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}