<?php

/* Exercici 1

Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 

Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos 
(si el sou supera 6000, paga impostos).*/

class Employee {

    public $name;
    public $salary;

    public function __construct($name, $salary) {

        $this->name = $name;
        $this->salary = $salary;
    }

    public function print() {

        if ($this->salary > 6000) {

        echo $this->name." has to pay taxes!";
        echo '<br>';
    
        } else {

            echo $this->name." doesn't have to pay taxes";
            echo '<br>';

        }
    }
   
}

$Employee1 = new Employee('Alex', 8000);
$Employee2 = new Employee('May', 10000);
$Employee3 = new Employee('Manolo', 6000);
$Employee4 = new Employee('Sam', 4000);

$Employee1->print();
$Employee2->print();
$Employee3->print();
$Employee4->print();

?>