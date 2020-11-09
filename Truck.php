<?php

//namespace Truck;

require_once 'Vehicle.php';

class Truck extends Vehicle  {

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private $storageCapacity;
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, int $storageCapacity, string $Energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorageCapacity($storageCapacity);
        $this->setEnergy($Energy);
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
    public function getLoading(): int
    {
        return $this->loading;
    }
    public function isItLoaded(): string    
    {   
        $sentence = "";
        if ($this->loading < $this->storageCapacity)
        {
            $sentence .= "In filling ";
        }
        else {
            $sentence .= "Full! ";
        }
        return $sentence;
    }
}