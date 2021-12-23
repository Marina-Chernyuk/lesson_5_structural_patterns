<?php

use SquareAreaLib;
use CircleAreaLib;
use SquareAreaAdapter;
use CircleAreaAdapter;

$squareSide = 10;
$circlePerimeter = 50;
$squareAreaAdapter = new SquareAreaAdapter(new SquareAreaLib(), $squareSide);
$circleAreaAdapter = new CircleAreaAdapter(new CircleAreaLib(), $circlePerimeter);

$csquareArea = $squareAreaAdapter->squareArea($squareSide);
$circleArea = $circleAreaAdapter->circleArea($circlePerimeter);

echo "Площадь квадрата = {$csquareArea}";
echo "Площадь круга = {$circleArea}";
