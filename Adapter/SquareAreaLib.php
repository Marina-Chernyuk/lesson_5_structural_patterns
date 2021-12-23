<?php

class SquareAreaLib
{
   public function getSquareArea(int $diagonal): float|int
   {
       return ($diagonal**2)/2;
   }
}