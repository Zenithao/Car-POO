<?php

class Car
{
    private string $color;
    private int $currentSpeed = 0;
    private int $nbSeats = 1;
    private int $nbWheels = 4;
    private string $energyType;
    private int $fuelLevel = 25;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getnbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setnbSeats(int $nbSeats): void
    {
        $this->color = $nbSeats;
    }

    public function getnbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setnbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getenergyType(): string
    {
        return $this->energyType;
    }

    public function setenergyType(string $energyType): void
    {
        $this->energyType = $energyType;
    }

    public function getfuelLevel(): int
    {
        return $this->fuelLevel;
    }

    public function setfuelLevel(int $fuelLevel): void
    {
        $this->fuelLevel = $fuelLevel;
    }

    public function start()
    {
        if($this->currentSpeed === 0){
            return "Vroom!";
        } else {
            return "La voiture roule déjà!";
        }
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }
}