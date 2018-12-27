<?php


$a = array(5, 6, 10, 15);
$b = array(8, 5, 3, 25);

echo arrayAverage ($a) - arrayAverage ($b) . "<br><br>";


function arrayAverage ($array) {
   return array_sum($array) / count($array);
}


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