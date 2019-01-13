<?php

$failas = "copyFile.txt";
$kopija = "kopija.txt";

if (copy($failas, $kopija)){
    echo "Kopijavimas pavyko";
} else {
    echo "Ivyko klaida";
}

/*
 if (!copy($failas, $kopija)) {
    echo "failed to copy $failas...\n";
}
*/

