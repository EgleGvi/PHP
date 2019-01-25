<?php

function query($queryString){
    $servername = 'localhost';
    $dbname = 'Auto';
    $username = 'Auto';
    $password = 'LabaiSlaptas123';

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die('Nepavyko prisijungti: ' . $conn->connect_error);
    }
    if (!($result = $conn->query($queryString))) {
        die("Error: " . $conn->error);
    }
    return $result;
}