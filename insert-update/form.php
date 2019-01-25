<?php

include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $car = query("SELECT * FROM radars WHERE id = '". $id . "'")->fetch_assoc();
} else {
    $car = [];
}
?>

<form action="save.php" method="post">
    <h3>Greičio fiksavimo data ir laikas</h3>
    <input type="datetime" name="date" <?php echo isset($car['date']) ? "value=\"" . $car['date'] . "\"" : "" ?>>
    <h3>Automobilio numeris</h3>
    <input type="text" name="number" <?php echo isset($car['number']) ? "value=\"" . $car['number'] . "\"" : "" ?>>
    <h3>Nuvažiuotas atstumas metrais</h3>
    <input type="number" name="distance" <?php echo isset($car['distance']) ? "value=\"" . $car['distance'] . "\"" : "" ?>>
    <h3>Sugaištas laikas sekundėmis</h3>
    <input type="number" name="time" <?php echo isset($car['time']) ? "value=\"" . $car['time'] . "\"" : "" ?>>
    <input type="hidden" name="id" <?php echo isset($car['id']) ? "value=\"" . $car['id'] . "\"" : "" ?>>
    <input class="btn" type="submit" name="submit" value="Patvirtinti">
</form>
