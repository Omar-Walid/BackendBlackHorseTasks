<?php

abstract class Shape{
    abstract public function calculateArea();
}

class Circle extends Shape{

    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }
}
    class Rectangle extends Shape{
        private $length;
        private $width;

        public function __construct($length, $width){
            $this->length = $length;
            $this->width = $width;
        }
        public function calculateArea(){
            return $this->length * $this->width;
        }
    }

    $obj1=new Rectangle(5, 10);
    $obj2=new Circle(7);

    echo "Rectangle Area: ". $obj1->calculateArea();
    echo "<br>";
    echo "Circle Area: ". $obj2->calculateArea();
?>