<?php

require_once 'Circle.php';

class TestCircle
{
    public function validatetCalculatedArea()
    {
        $shape = new Circle(1);
        $result = $shape->getCalculatedArea();
        $result = round($result,12);

        $expected = 3.14159265359;
        return $result == $expected;
    }

    public function validateRandomShape()
    {
        $random = Circle::getRandomShape();
        return !empty($random->getName());
    }
}
