<?php

//pirmas uzdavinys
$a = array(5, 6, 10, 15);
$b = array(8, 5, 3, 25);

echo arrayAverage ($a) - arrayAverage ($b) . "<br><br>";


function arrayAverage ($array) {
   return array_sum($array) / count($array);
}

// antras uzdavinys
function getDividers ($number) {
    $dividers = array();

    for ($i = $number-1; $i >= 1; $i--) {
        if ($number % $i == 0) {
            $dividers[] = $i;
        }
    }
    return $dividers;
}

function isPerfect($number) {
    $dividers = getDividers($number);
    if (array_sum($dividers) == $number) {
        return true;
    }
    else {
        return false;
    }
}

$perfectNumbers = array();

for ($i = 1; $i <= 1000; $i++) {
    if (isPerfect($i)) {
        $perfectNumbers[] =  $i;
    }
}

for($i = 0; $i < count($perfectNumbers); $i++){
    echo "tobulas skaicius " . $perfectNumbers[$i] . "<br>";
}
echo "<br><br>";

//php-07-masyvai-1-2

$a = array('Jonas', 'Petras', 'Antanas', 'Povilas');
$pairs = array();
foreach($a as $name){
    foreach($a as $name2){
        if($name == $name2){
            continue;
        }
        $pair = $name . " - " . $name2;
        $pair2 = $name2 . " - " . $name;
        if(in_array($pair, $pairs) || in_array($pair2, $pairs)) {
            continue;
        }
        $pairs[] = $pair;
    }
}

foreach($pairs as $pair) {
    echo $pair . "<br><br>";
}


// php-07-masyvai-3

$b = array( array(1, 3, 4),
            array(2, 5),
            array(2 => 3, 5=> 8),
            array(1, 1, 5 => 1));

$columnSum = [];
foreach($b as $row) {
    $sum =0;
    foreach ($row as $index => $value) {
        $columnSum[$index] += $value;
    }
}
var_dump($columnSum);
echo("<br><br>Didziausia suma " . max($columnSum));
