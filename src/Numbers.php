<?php

Class Numbers
{
    private int $a;
    private int $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return int
     */
    public function getA() : int
    {
        return $this->a;
    }

    /**
     * @return int
     */
    public function getB() : int
    {
        return $this->b;
    }

    public function powNumbers($a, $b) : int
    {
        return pow($a, $b);
    }

    public function divNumbers($a, $b) : int
    {
        return $a / $b;
    }
}
