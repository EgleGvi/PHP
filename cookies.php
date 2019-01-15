<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <style>
        th, td {
            border: 1px solid black;
        }

        th {
            padding: 5px;
        }

        tr {
            height: 30px;
        }

        table {
            border: 2px solid black;
            margin-top: 30px;
        }

        input {
            width: 200px;
            height: 20px;
        }

        .btn {
            width: 100px;
            height: 25px;
            display: block;
            margin-top: 15px;
        }

        h3 {
            margin-bottom: 5px;
        }
    </style>
    <body>
        <form action="cookies.php">
            <h3>Greičio fiksavimo data ir laikas</h3>
            <input type="date" name="date">
            <input type="time" name="time">
            <h3>Automobilio numeris</h3>
            <input type="text" name="number">
            <h3>Nuvažiuotas atstumas metrais</h3>
            <input type="number" name="distance">
            <h3>Sugaištas laikas sekundėmis</h3>
            <input type="number" name="number2">
            <input class="btn" type="submit" name="submit" value="Patvirtinti">
        </form>

<?php
    //setcookie('cars', "", time() + (86400 * 30), "/");
    if (isset($_COOKIE['cars'])) {
        $cars = json_decode($_COOKIE['cars'], true); //parametras true nurodo, kad norim masyvo, o ne objektu

    } else {
        $cars = [];
    }

    if(isset($_GET['date']) && isset($_GET['time']) && isset($_GET['number'])
        && isset($_GET['distance']) && isset($_GET['number2'])) {
        $date = $_GET['date'];
        $time = $_GET['time'];
        $number = $_GET['number'];
        $distance = $_GET['distance'];
        $number2 = $_GET['number2'];
        $speed = $distance / $number2;

        $car = [
            'date' => $date,
            'time' => $time,
            'number' => $number,
            'distance' => $distance,
            'number2' => $number2,
            'speed' => $speed
        ];

        $cars[] = $car;

        usort($cars, function ($car1, $car2) {
            return $car2['speed'] <=> $car1['speed'];
        });

        setcookie('cars', json_encode($cars), time() + (86400 * 60), "/");
    }

    if(isset($_GET['filter'])) {
        $filter = $_GET['filter'];
        $filterLower = strtolower($filter);
        $filterUpper = strtoupper($filter);

        usort($cars, function ($car1, $car2) {
            return $car2['speed'] <=> $car1['speed'];
        });

        $unfilteredCars = $cars;
        $cars = [];

        $regexp = "/\b\w*(" . $filterLower . "|" . $filterUpper . ")\w*\b/";

        foreach($unfilteredCars as $car) {
            $matches = [];
            preg_match($regexp, $car['number'],$matches);

            if(count($matches) > 0) {
                $cars[] = $car;
            }
        }
    }
?>
    <table>
        <tr>
            <form>
                <td>Filtruoti numerius</td>
                <td colspan="3"><input type="text" name="filter"></td>
                <td><input class="btn" type="submit" name="submit" value="Filtruoti"></td>
            </form>
        </tr>
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
                echo "<td>" . $car['date'] . " " . $car['time'] . "</td>";
                echo "<td>" . $car['number'] . "</td>";
                echo "<td>" . $car['distance'] . "</td>";
                echo "<td>" . $car['number2'] . "</td>";
                echo "<td>" . round($car['speed'], 2) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    </body>
</html>