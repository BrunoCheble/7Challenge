<?php

require_once 'Shape.php';

class TestShape 
{
    public function validatetCalculatedArea()
    {
        $shape = new Shape(5,5);
        $result = $shape->getCalculatedArea();
        return $result == 25;        
    }
    
    public function validateRandomShape()
    {
        $random = Shape::getRandomShape();
        return !empty($random->getName());
    }
}
