<?php
for ($i = 0; $i <= 1337; $i++) {
    // Vérifie si le nombre est 42
    if ($i == 42) {
        // Affiche 42 en gras et souligné
        echo "<strong><u>$i</u></strong><br>";
    } else {
        // Affiche les autres nombres avec un saut de ligne
        echo "$i<br>";
    }
}
?>