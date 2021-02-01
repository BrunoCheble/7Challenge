<?php
class Shape
{
    public string $name;
    protected float $width;
    protected float $length;
    private string $id;

    const SHAPE_TYPE = 1;

    public function __construct(float $length = 0, float $width = 0)
    {
        $this->setId();
        $this->setWidth($width);
        $this->setLength($length);
    }

    protected function setWidth(float $width)
    {
        if($width > 0)
        {
            $this->width = $width;
        }
    }

    protected function setLength(float $length)
    {
        if($length > 0)
        {
            $this->length = $length;
        }
    }

    private function setId()
    {
        $this->id = uniqid();
    }

    protected function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    protected function setRandomName(string $prefix = 'Random Shape')
    {
        $name = $prefix.' - '.$this->getId();
        $this->setName($name);
    }
    
    public function getCalculatedArea()
    {
        return $this->width * $this->length;
    }

    public static function getShapeType()
    {
        return self::SHAPE_TYPE;
    }

    public static function getRandomShape()
    {
        $width = rand(1, 1000);
        $length = rand(1, 1000);

        $random = new Shape($length, $width);
        $random->setRandomName();

        return $random;
    }
}