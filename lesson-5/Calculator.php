<?php

class Calculator
{
    /**
     * @param int $x
     * @param int $y
     * @return float|int
     */
    public function getPower(int $x, int $y)
    {
        return pow($x, $y);
    }
}
