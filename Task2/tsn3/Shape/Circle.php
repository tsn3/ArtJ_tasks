<?php
namespace tsn3\Shape;

class Circle extends ShapeCircle
{
    private $radius;

    public function __construct($radius)
    {
        if ($radius <= 0) {
            throw new \Exception('Радиус круга не может быть отрицательным или равным 0.');
        }
        $this -> radius = $radius;
    }

    public function square()
    {
        return $this -> radius*$this -> radius*pi();
    }
    public function perimetr() {
        return ($this -> radius *pi())*2;
    }
    public function diameter() {
        return $this->radius * 2;
    }
}

