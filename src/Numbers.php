<?php

Class Numbers
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return int
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return int
     */
    public function getB()
    {
        return $this->b;
    }

    public function powNumbers($a, $b)
    {
        return pow($a, $b);
    }

    public function divNumbers($a, $b)
    {
        return $a / $b;
    }
}
