<?php
namespace Shape;

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {

        if ($width <= 0 || $height <= 0) {
            throw new Exception("Высота или ширина прямоугольника не может быть отрицательной или равной 0.");
        }

        $this -> width=$width;
        $this -> height=$height;
    }

    public function square()
    {
        return $this -> height * $this -> width;
    }
    public function perimetr()
    {
        return ($this -> height + $this -> width)*2;
    }
}

