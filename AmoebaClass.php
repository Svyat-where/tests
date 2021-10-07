<?php

class Amoeba {
    
    /**
     * @var int $startQuantity
     * @var int $division
     * @var int $time
     * 
     */
    protected $division;
    protected $startQuantity;
    protected $time;

    public function __construct(int $startQuantity, int $division, $time)
    {
        $this->startQuantity = $startQuantity;
        $this->division = $division;
        $this->time = $time;
    }


    /**
     * Counts how much time needs user amoeba quantity with its division rate according to start conditions named in constructor
     */
    public function count($startQuantity, $division)
    {

        $lastBasicElement = $this->startQuantity * pow($this->division, $this->time);

        return log($lastBasicElement / $startQuantity, $division);

    }

}



