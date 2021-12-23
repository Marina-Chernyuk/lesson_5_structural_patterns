<?php

use ICircle;
use CircleAreaLib;

class CircleAreaAdapter implements ICircle
{
    private \CircleAreaLib $circleAreaLib;
    private $circumference;

    public function __construct(CircleAreaLib $circleAreaLib, int $circumference)
    {
        $this->circleAreaLib = $circleAreaLib;
        $this->circumference = $circumference;
    }

    public function circleArea(int $circumference): float
    {
        $diagonal = $circumference / M_PI;
        $circleArea = $this->$circleAreaLib->getCircleArea(int $diagonal);
        return $circleArea;
    }
}