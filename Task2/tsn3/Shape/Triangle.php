<?php
namespace Shape;

class Triangle implements Shape
{
    private $base;
    private $side1;
    private $side2;
    private $height;

    public function __construct($base, $side1, $side2, $height)
    {
        if ($base <= 0 || $side1 <= 0 || $side2 <= 0 || $height<= 0) {
            throw new Exception("Высота или сторона треугольника не могут быть отрицательными или равными 0.");
        }
        $this->base = $base;
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this ->height = $height;
    }


    public function square()
    {
        return $this->base*$this->height/2;
    }
    public function perimetr()
    {
        return ($this->base+$this->side1+$this->side2);
    }

}