<?php
for ($i = 0; $i <= 1337; $i++) {
    // Vérifie si les nombres de 0 à 20 sont écrit en italique
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue; // Passe au prochain tour de boucle
    }
    // Affiche le nombre avec un retour à la ligne
    echo "$i<br>";
}
?>