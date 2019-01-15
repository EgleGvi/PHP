<?php

include "radar.php";
include "auto.php";

$cars = [
    $auto1 = new Auto('2018.12.14', '15.47', 'ABC 147', 1574, 23),
    $auto2 = new Auto('2018.10.25', '10.11', 'JYT 863', 658, 14),
    $auto3 = new Auto('2019.01.12', '08.03', 'PLI 258', 982, 16),
    $auto4 = new Auto('2018.07.01', '23.16', 'FGT 586', 1463, 19),
    $auto5 = new Auto('2019.01.04', '06.56', 'ADS 456', 1045, 20),
];

usort($cars, function ($car1, $car2) {
    return Radar::measureSpeed($car2) <=> Radar::measureSpeed($car1);
});

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Greičio fiksavimo data ir laikas</th>
            <th>Automobilio numeris</th>
            <th>Nuvažiuotas atstumas metrais</th>
            <th>Sugaištas laikas sekundėmis</th>
            <th>Greitis</th>
        </tr>
        <?php
        foreach ($cars as $car) {
            echo "<tr>";
            echo "<td>" . $car->date . " " . $car->time . "</td>";
            echo "<td>" . $car->number . "</td>";
            echo "<td>" . $car->distance . "</td>";
            echo "<td>" . $car->travelTime . "</td>";
            echo "<td>" . round(Radar::measureSpeed($car), 1) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
