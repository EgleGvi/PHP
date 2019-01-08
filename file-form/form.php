<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Form</title>
    </head>
    <body>
        <form action="form.php">
            <h4>Iveskite skaiciu</h4>
            <input type="text" name="number">
            <h4>Iveskite skaiciu</h4>
            <input type="text" name="number2">
            <input type="submit" name="submit">
        </form>
        <?php
        $first = $_GET['number'];
        $sec = $_GET['number2'];
        $sum = $first + $sec;
        $multi = $first * $sec;
        $subtraction = $first - $sec;
        $division = $first / $sec;
            if (!is_numeric($first) || !is_numeric($sec) || $first == 0 && $sec == 0) {
                echo "Neteisingai ivesti duomenys";
            }
            else {
                echo "<br>Sudetis: " . $sum;
                echo "<br>Atimtis: " . $subtraction;
                echo "<br>Sandauga: " . $multi;
                echo "<br>Dalyba: " . round($division, 2, PHP_ROUND_HALF_UP);
            }
        ?>
    </body>
</html>


