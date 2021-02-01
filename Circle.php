<?php

require_once 'Shape.php';

class Circle extends Shape
{
    const SHAPE_TYPE = 3;

    protected float $radius;

    public function __construct(float $radius)
    {
        parent::__construct(0, 0);
        $this->setRadius($radius);
    }

    public function getCalculatedArea()
    {
        return pow($this->radius, 2) * M_PI;
    }

    protected function setRadius(float $radius)
    {
        if ($radius > 0) {
            $this->radius = $radius;
        }
    }

    public static function getRandomShape()
    {
        $radius = rand(1, 1000);
        $random = new Circle($radius);

        $random->setRandomName('Random Circle');

        return $random;
    }

    /*
    // Solução para obter o valor da constante da class Circle
    public static function getShapeType()
    {
        return self::SHAPE_TYPE;
    }
    */
}
