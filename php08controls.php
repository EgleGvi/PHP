<?php
//atspausdinti skirtingas poras vyras - moteris

$people = [
    ['vardas' => 'Jonas', 'lytis' => 'V'],
    ['vardas' => 'Ona', 'lytis' => 'M'],
    ['vardas' => 'Petras', 'lytis' => 'V'],
    ['vardas' => 'Maryte', 'lytis' => 'M'],
    ['vardas' => 'Egle', 'lytis' => 'M']
];

$pairs = [];
foreach($people as $human){
    foreach($people as $human2){
        if($human['vardas'] == $human2['vardas']){
            continue;
        }
        if($human['lytis'] == $human2['lytis']){
            continue;
        }
        $pair = $human['vardas'] . " - " . $human2['vardas'];
        $pair2 = $human2['vardas'] . " - " . $human['vardas'];
        if(in_array($pair, $pairs) || in_array($pair2, $pairs)){
            continue;
        }
        $pairs[] = $pair;

    }
}
var_dump($pairs);

//atspausdinti triju zmoniu grupes, kad nebutu tu paciu lyciu

$groups = [];
foreach($people as $index => $human){
    foreach($people as $index2 => $human2){
        foreach($people as $index3 => $human3){
            if($index == $index2 || $index2 == $index3 || $index == $index3){
                continue;
            }
            if($human['lytis'] == $human2['lytis'] || $human['lytis'] == $human3['lytis']){
                continue;
            }
            $group1 = $human['vardas'] . " - " . $human2['vardas'] . " - " . $human3['vardas'];
            $group2 = $human['vardas'] . " - " . $human3['vardas'] . " - " . $human2['vardas'];
            $group3 = $human2['vardas'] . " - " . $human3['vardas'] . " - " . $human['vardas'];
            $group4 = $human2['vardas'] . " - " . $human['vardas'] . " - " . $human3['vardas'];
            $group5 = $human3['vardas'] . " - " . $human2['vardas'] . " - " . $human['vardas'];
            $group6 = $human3['vardas'] . " - " . $human['vardas'] . " - " . $human2['vardas'];

            if(in_array($group1, $groups) || in_array($group2, $groups) || in_array($group3, $groups) ||
                in_array($group4, $groups) || in_array($group5, $groups) || in_array($group6, $groups)){
                continue;
            }
            $groups[] = $group1;
        }
    }
}
var_dump($groups);

