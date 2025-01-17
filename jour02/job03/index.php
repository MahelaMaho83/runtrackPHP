<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        // Si le nombre est entre 0 et 20, écrire en italique
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Si le nombre est entre 25 et 50, souligner
        echo "<u>$i</u><br>";
    } elseif ($i == 42) {
        // Si le nombre est 42, afficher "La Plateforme_"
        echo "La Plateforme_<br>";
    } else {
        // Sinon, afficher le nombre normalement
       echo "$i<br>";
    }
}

