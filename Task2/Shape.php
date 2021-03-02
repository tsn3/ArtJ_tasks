<?php

abstract class Shape {
    public abstract function area();
    public abstract function perimeter();
}

class Circle extends  Shape {
    private $radius;

    public function __construct($radius)
    {
        $this -> radius = $radius;
    }

    public function area()
    {
        return $this -> radius*$this -> radius*pi();
    }
    public function perimeter(){
        return ($this -> radius *pi())*2;
    }
}
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this -> width=$width;
        $this -> height=$height;
    }

    public function area()
    {
        return $this -> height * $this -> width;
    }
    public function perimeter()
    {
        return ($this -> height + $this -> width)*2;
    }
}

class Triangle extends Shape {
    private $base;
    private $side1;
    private $side2;
    private $height;

    public function __construct($base, $side1, $side2, $height)
    {
        $this->base = $base;
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this ->height = $height;
    }


    public function area()
    {
        return $this->base*$this->height/2;
    }
    public function perimeter()
    {
        return ($this->base+$this->side1+$this->side2);
    }

}

$circ = new Circle(5);
echo $circ->perimeter(). PHP_EOL;
echo $circ -> area(). PHP_EOL;
$triag = new Triangle(5, 3, 3, 5);
echo $triag->perimeter(). PHP_EOL;
echo $triag -> area(). PHP_EOL;
$rect = new Rectangle(3,4);
echo $rect->perimeter(). PHP_EOL;
echo $rect -> area(). PHP_EOL;