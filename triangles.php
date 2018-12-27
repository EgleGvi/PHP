<?php

function type($a, $b, $c) {
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return 'Nesusidaro';
    } else if ($a == $b && $a == $c) {
        return 'Lygiakraštis';
    } else if  ($a == $b || $b == $c || $a==$c) {
        return 'Lygiašonis';
    }
    else {
        return 'Įvairiakraštis';
    }
}

function area($a, $b, $c, $type) {
    if($type == "Lygiakraštis") {
       return (pow($a, 2)*sqrt(3))/4;
    }
    else if($type == "Lygiašonis") {
        $p = ($a + $b + $c)/2;
        return (sqrt($p*($p-$a)*($p-$b)*($p-$b)));
    }
    else if($type == "Įvairiakraštis"){
        $p = ($a + $b + $c)/2;
        return (sqrt($p*($p-$a)*($p-$b)*($p-$b)));
    }
    else {
        return "Nera ploto";
    }
}
?>

<html>
    <head></head>
    <body>
        <div>Trikampis 3 4 5</div>
        <div>Tipas: <?php $type = type(3, 4, 5); echo $type; ?></div>
        <div>Plotas: <?php echo area(3, 4, 5, $type); ?></div>
    <?php echo "<br><br>"; ?>
        <div>Trikampis 2 10 8</div>
        <div>Tipas: <?php $type = type(2,10,8); echo $type; ?></div>
        <div>Plotas: <?php echo area(2, 10, 8, $type); ?> </div>
    <?php echo "<br><br>"; ?>
        <div>Trikampis 5 6 5</div>
        <div>Tipas: <?php $type = type(5, 6, 5); echo $type; ?></div>
        <div>Plotas: <?php echo area(5, 6, 5, $type); ?> </div>
    <?php echo "<br><br>"; ?>
        <div>Trikampis 5 5 5</div>
        <div>Tipas: <?php $type = type(5, 5, 5); echo $type; ?></div>
        <div>Plotas: <?php echo area(5, 5, 5, $type); ?> </div>
    <?php echo "<br><br>"; ?>
    </body>
</html>
