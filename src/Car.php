<?php


class Car
{
    private int $wheelsNumber = 4;
    private float $speed = 0;
    private string $color;
    private int $seatsNumber;
    private string $energy;
    private int $energyLevel = 20;

    public function __construct(string $color, int $seatsNumber, string $energy)
    {
        $this->color = $color;
        $this->seatsNumber = $seatsNumber;
        $this->energy = $energy;
    }
    public function forward(): string
    {
        $this->speed = $this->getSpeed();
    
        return "<br>Je n'ai plu de " . $this->getEnergy() . "!!";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->speed > 0) {
           $this->speed--;
           $sentence .= "Freine !";
       }
       $sentence .= "<br>Je suis arrêté !";
       return $sentence;
    }

    public function start(): string
    {   
        $startSentence = "";
        while($this->speed < $this->getEnergyLevel()) {
            $this->speed ++;
            $startSentence .= "J'accelère !";
        }

        return $startSentence;
    }

    /**
     * Get the value of wheelsNumber
     */
    public function getWheelsNumber()
    {
        return $this->wheelsNumber;
    }

    /**
     * Get the value of speed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of seatsNumber
     */
    public function getSeatsNumber()
    {
        return $this->seatsNumber;
    }

    /**
     * Get the value of energy
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Get the value of energyLevel
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }


    /**
     * Set the value of wheelsNumber
     *
     * @return  self
     */ 
    public function setWheelsNumber($wheelsNumber)
    {
        $this->wheelsNumber = $wheelsNumber;

        return $this;
    }

    /**
     * Set the value of energyLevel
     *
     * @return  self
     */ 
    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * Set the value of seatsNumber
     *
     * @return  self
     */ 
    public function setSeatsNumber($seatsNumber)
    {
        $this->seatsNumber = $seatsNumber;

        return $this;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
}
