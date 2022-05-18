<?php

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        $area = ($diagonal ** 2) / 2;
        return $area;
    }
}
class CircleAreaLib
{
    public function getCircleArea(int $diagonal)
    {
        $area = (M_PI * $diagonal ** 2) / 4;
        return $area;
    }
}

interface ISquare
{
    function squareArea(int $sideSquare);
}

class Square implements ISquare
{
    public function squareArea(int $sideSquare)
    {
        $diagonal = pow($sideSquare, 1 / 2);
        $area = new SquareAreaLib();
        return $area->getSquareArea($diagonal);
    }
}

interface ICircle
{
    function circleArea(int $circumference);
}

class Circle implements ICircle
{
    public function circleArea(int $circumference)
    {
        $diagonal = $circumference / M_PI;
        $area = new CircleAreaLib();
        return $area->getCircleArea($diagonal);
    }
}
