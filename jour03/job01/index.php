<?php
// Définition du tableau
$numbers = [200, 204, 173, 98, 171, 404, 459];

// Parcours du tableau
foreach ($numbers as $number) {
    // Vérification de la parité
    if ($number % 2 === 0) {
        echo "$number est paire<br />";
    } else {
        echo "$number est impaire<br />";
    }
}
?>