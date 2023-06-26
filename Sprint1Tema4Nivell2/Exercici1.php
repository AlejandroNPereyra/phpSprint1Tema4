<?php

/*- Exercici 1

Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, 
genera un valor aleatori per a l'objecte a què se li aplica el mètode.
Crea també el mètode shapeName, que digui quina és la figura que ha sortit 
en l'última tirada del dau en qüestió.
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.*/

class PokerDice {

    public $side1;
    public $side2;
    public $side3;
    public $side4;
    public $side5;
    public $side6;

    public function __construct($side1, $side2, $side3, $side4, $side5, $side6) {

        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->side4 = $side4;
        $this->side5 = $side5;
        $this->side6 = $side6;

    }

    public function throwDice() {

        $sides = get_object_vars($this);

        $Side = array_rand($sides);

        return $this->$Side;

    }

}

session_start();

if (!isset($_SESSION['counter'])) {
 
    $_SESSION['counter'] = 0;

}

$pokerDice = new PokerDice('Ace', 'King', 'Queen', 'Joker', 7, 8);

$randomSides = array();

for ($x=0; $x <=4; $x++) {

    $randomSide = $pokerDice->throwDice();
    array_push($randomSides, $randomSide);

}

foreach ($randomSides as $randomPlay) {

    echo $randomPlay;
    echo '<br>';

}

echo '<br>';

$_SESSION['counter']++;

echo "Total times you have thrown the dices: " . $_SESSION['counter'];

?>