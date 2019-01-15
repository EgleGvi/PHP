<?php

class Human
{

    public $vardas;
    public $pavarde;
    public $amzius;

}

$human1 = new Human();
$human1->vardas = 'Petras';
$human1->pavarde = 'Petraitis';
$human1->amzius = '35';

$human2 = new Human();
$human2->vardas = 'Ona';
$human2->pavarde = 'Onaite';
$human2->amzius = '15';

$human3 = new Human();
$human3->vardas = 'Jonas';
$human3->pavarde = 'Jonaitis';
$human3->amzius = '24';

$zmones = [
    $human1, $human2, $human3
];

//$zmones = [
//    $human1 = new Human('Petras', 'Petraitis', 35),
//    $human2 = new Human('Ona', 'Onaite', 15),
//    $human3 = new Human('Jonas', 'Jonaitis', 24)
//];

foreach($zmones as $a){
    echo "<br>" . $a->vardas;
}

var_dump($zmones);
