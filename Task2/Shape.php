<?php

include_once 'Logger.php';

interface Shape
{
    public function square();

    public function perimetr();
}

abstract class ShapeCircle implements Shape
{
    abstract function diameter();
}


class Circle extends ShapeCircle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        if ($radius <= 0) {
            throw new \Exception('Радиус круга не может быть отрицательным или равным 0.');
        }
        $this->radius = $radius;
    }

    public function square()
    {
        return $this->radius * $this->radius * pi();
    }

    public function perimetr()
    {
        return ($this->radius * pi()) * 2;
    }

    public function diameter()
    {
        return $this->radius * 2;
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {

        if ($width <= 0 || $height <= 0) {
            throw new Exception("Высота или ширина прямоугольника не может быть отрицательной или равной 0.");
        }

        $this->width = $width;
        $this->height = $height;
    }

    public function square()
    {
        return $this->height * $this->width;
    }

    public function perimetr()
    {
        return ($this->height + $this->width) * 2;
    }
}


class Triangle implements Shape
{
    private $base;
    private $side1;
    private $side2;
    private $height;

    public function __construct($base, $side1, $side2, $height)
    {
        if ($base <= 0 || $side1 <= 0 || $side2 <= 0 || $height <= 0) {
            throw new Exception("Высота или сторона треугольника не могут быть отрицательными или равными 0.");
        }
        $this->base = $base;
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->height = $height;
    }


    public function square()
    {
        return $this->base * $this->height / 2;
    }

    public function perimetr()
    {
        return ($this->base + $this->side1 + $this->side2);
    }

}

echo "Периметр и площадь заданных фигур:" . PHP_EOL;
try {
    $circ = new Circle(0);
    echo "Диаметр заданного круга = " . $circ->diameter() . PHP_EOL;
    echo "Периметр круга = " . $circ->perimetr() . PHP_EOL;
    echo "Площадь круга = " . $circ->square() . PHP_EOL;
} catch (Exception $e) {
    Logger::error( $e->getMessage());
}

try {
    $triag = new Triangle(0, 3, 3, 5);
    echo "Периметр треугольника = " . $triag->perimetr() . PHP_EOL;
    echo "Площадь треугольника = " . $triag->square() . PHP_EOL;
} catch (Exception $e) {
    Logger::error( $e->getMessage());
}

try {
    $rect = new Rectangle(5, 0);
    echo "Периметр прямоугольника = " . $rect->perimetr() . PHP_EOL;
    echo "Площадь прямоугольника = " . $rect->square() . PHP_EOL;
} catch (Exception $e) {
    Logger::info( $e->getMessage());
}
