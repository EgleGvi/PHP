<?php

include 'html.php';
include 'db.php';
head();

if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}

if($offset < 0){
    $offset = 0;
}
$count=0;
$sqlCount = "SELECT COUNT(*) FROM radars";
if (!($result = query($sqlCount))) {
    die("Ivyko klaida");
} else {
    $count = $result->fetch_array()[0];
}

$sql = "SELECT *, ROUND(distance/time*3.6) AS speed FROM radars ORDER BY date DESC LIMIT 5 OFFSET " . $offset;
if (!($result = query($sql))) {
    die("Ivyko klaida");
}

if ($result->num_rows > 0) {
    $nr = 1 + $offset;
?>
    <tr>
        <td colspan="7"><a class="btn btn-secondary float-left" href="form.php">Create New</a></td>
    </tr>
    <table class="table table-bordered">
        <tr>
            <th>Eil. Nr.</th>
            <th>Greičio fiksavimo data ir laikas</th>
            <th>Automobilio numeris</th>
            <th>Nuvažiuotas atstumas metrais</th>
            <th>Sugaištas laikas sekundėmis</th>
            <th>Greitis km/h</th>
            <th>Veiksmai</th>
        </tr>
        <?php
        $colNum = 1 + $offset;
    while ($car = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $colNum++ . "</td>";
            echo "<td>" . $car['date'] . "</td>";
            echo "<td>" . $car['number'] . "</td>";
            echo "<td>" . $car['distance'] . "</td>";
            echo "<td>" . $car['time'] . "</td>";
            echo "<td>" . round($car['speed'], 2) . "</td>";
            echo "<td><a class=\"btn btn-info\" href=\"form.php?id=". $car['id'] . "\">Edit</a>";
            echo "<a class=\"btn btn-danger\" href=\"delete.php?id=". $car['id'] . "\">Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <hr>
    <?php
    if($offset + 5 < $count){ ?>
        <a class="btn btn-secondary float-right" href="?offset=<?php echo $offset + 5; ?>">Pirmyn</a>
    <?php } ?>

    <?php
    if($offset >= 5){ ?>
        <a class="btn btn-secondary float-right" href="?offset=<?php echo $offset - 5; ?>">Atgal</a>
    <?php } ?>

<?php

} else {
    echo "Nera duomenu";
}

foot();