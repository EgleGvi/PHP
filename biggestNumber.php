<?php
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
?>

<html>
    <head></head>
    <body>
        <div>Didziausia suma: <?php echo(max($columnSum)); ?></div>
    </body>
</html>

<?php

//destytojo variantas
/*$b = array( array(1, 3, 4),
    array(2, 5),
    array(2 => 3, 5=> 8),
    array(1, 1, 5 => 1));

echo "viso stulpeliu " . maxIndex($b);

function maxIndex($b){
    $max =-1;
    foreach($b as $value){
        $maxKey = max(array_keys($value));
        if($maxKey > $max) $max = $maxKey;
    }
    return $max +1;
}*/
