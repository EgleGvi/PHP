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

<?php

include "studentAver.php";

$student1 = new Student();
$student1->name = 'Petras';
$student1->lastName = 'Petraitis';
$student1->average = 8.5;

$student2 = new Student();
$student2->name = 'Maryte';
$student2->lastName = 'Mikalauskaite';
$student2->average = 7.8;

$student3 = new Student();
$student3->name = 'Jonas';
$student3->lastName = 'Jonaitis';
$student3->average = 9.2;

$student4 = new Student();
$student4->name = 'Ona';
$student4->lastName = 'Onute';
$student4->average = 9;

$student5 = new Student();
$student5->name = 'Ramune';
$student5->lastName = 'Ramunaite';
$student5->average = 8.9;

$students = [
    $student1, $student2, $student3, $student4, $student5
];

usort($students, function ($a, $b) {
    return $b->average <=> $a->average;
});
//var_dump($students);

?>
<table>
    <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Average</th
    </tr>
    <?php
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student->name . "</td>";
        echo "<td>" . $student->lastName . "</td>";
        echo "<td>" . $student->average . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>