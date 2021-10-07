<?php

class Figures
{

    protected $quantity;

    public function __construct(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function combinations(int $x, int $y)
    {
        $set = $x * $y ;

        $result = gmp_fact($set) / (gmp_fact($set - $this->quantity) * gmp_fact($this->quantity));

        return $result;
    }
}

