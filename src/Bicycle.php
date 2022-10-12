<?php

class Bicycle
{
    private string $color;
    public int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    public function __construct(string $color)
{
    $this->color = $color;
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

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed($currentSpeed): void
    {
        if ($currentSpeed >=0) {
        $this->currentSpeed = $currentSpeed;
    }
    
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * Set the value of nbWheels
     *
     * @return  self
     */ 
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * Set the value of nbSeats
     *
     * @return  self
     */ 
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
