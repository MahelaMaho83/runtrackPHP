<?php
// Définition du tableau
$numbers = [200, 204, 173, 98, 171, 404, 459];

// Parcours du tableau
foreach ($numbers as $number) {
    // Vérification de la parité
    if ($number % 2 === 0) {
        echo "$number est paire<br/>";
    } else {
        echo "$number est impaire<br/>";
    }
}

// Définition de la chaîne
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcours de la chaîne en affichant un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
?>
