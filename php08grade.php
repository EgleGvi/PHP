<?php
//mokiniu sarasas

$array = [
    [
        'vardas' => 'Jonas',
        'pazymiai' => [
            'lietuviu' => [4, 8, 6, 7],
            'anglu' =>[6, 7, 8],
            'matematika' => [3, 5, 4]
        ]
    ],
    [
        'vardas' => 'Ona',
        'pazymiai' => [
            'lietuviu' => [10, 9, 10],
            'anglu' =>[9, 8, 10],
            'matematika' => [10, 10, 9, 9]
        ]
    ]
];
$studentGrades = [];

foreach ($array as $index => $student) {
    $vardas = $student['vardas'];
    foreach ($student['pazymiai'] as $lesson) {
        foreach ( $lesson as $grade) {
            $studentGrades[$vardas][] = $grade;
        }
    }
}
var_dump($studentGrades);
foreach ($studentGrades as $name => $studentGrade) {
    $average = array_sum($studentGrade)/count($studentGrade);
    if ($average > $bestAverage) {
        $bestAverage=$average;
        $bestStudent=$name;
    }
}

echo 'Geriausias studentas ' . $bestStudent . " su vidurkiu " . $bestAverage;

$phone_numbers = [

];

$phone_numbers['Eric']=['telefonas' => '85462111111111111', 'adresas' => 'adredghjhgfsas 58fhfijdbv'];
$phone_numbers['Alex']=['telefonas' => '854628888888888888', 'adresas' => 'adresas 5885254fhfijdbv'];
$phone_numbers['Jessica']=['telefonas' => '85462', 'adresas' => ['adresas 58fhfijdbv', 'gfhdjskal;utrieowp']];

$phone_numbers['Jessica']['adresas'][]='ghfjdklsz;a';

var_dump($phone_numbers['Alex']['adresas']);
var_dump($phone_numbers);