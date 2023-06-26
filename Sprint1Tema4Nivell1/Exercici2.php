<?php

/*- Exercici 2

Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres 
l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin 
respectivament l'àrea de la forma area().*/

class Shape {

    public $width;
    public $height;

    public function __construct($width, $height) {
        
        $this->height = $height;
        $this->width = $width;
        
    }
}

class Triangle extends Shape {

    public function triangleArea () {

        $triangleArea = 0.5*($this->height*$this->width);
        echo "Triangle Area is: ".$triangleArea;
        echo '<br>';

    }

}

class Rectangle extends Shape {

    public function rectangleArea () {

        $rectangleArea = ($this->height*$this->width);
        echo "Rectangle Area is: ".$rectangleArea;
        echo '<br>';

    }

}

$triangle1 = new Triangle(10, 20);
$rectangle1 = new Rectangle(10, 20);

$triangle1->triangleArea(); 
$rectangle1->rectangleArea();         

?>