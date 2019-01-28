<?php

include 'db.php';

if(empty($_POST['date']) ||
    empty($_POST['number']) ||
    empty($_POST['distance']) ||
    empty($_POST['time'])
){
    die("Butina uzpildyti visus laukelius!");
}

$date = $_POST['date'];
$number = $_POST['number'];
$distance = $_POST['distance'];
$time = $_POST['time'];
$id = is_numeric($_POST['id']) ? $_POST['id'] : -1;
if($id >= 0){
    //edit
    $result=query("UPDATE radars SET date='$date', number='$number', distance='$distance', time='$time' WHERE id='$id'");
} else {
    //create new
    $result=query("INSERT INTO radars(date, number, distance, time) VALUES('$date', '$number', '$distance', '$time')");
}

if($result) {
    header("Location: http://localhost/php/PHP/insert-update/index.php");
    die();
} else {
    die("Ivyko klaida!");
}