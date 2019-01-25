<?php

include 'db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = query("DELETE FROM radars WHERE id = '". $id . "'");
} else {
    die("Nenurodytas id!");
}
if($result) {
    header("Location: http://localhost/php/PHP/insert-update/index.php");
    die();
} else {
    die("Ivyko klaida!");
}