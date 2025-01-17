<?php
// Fonction pour vérifier si un nombre est premier
function estPremier($n) {
    if ($n < 2) {
        return false; // Les nombres inférieurs à 2 ne sont pas premiers
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; // Si divisible par un nombre autre que 1 et lui-même
        }
    }
    return true; // Le nombre est premier
}

// Parcours des nombres de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    if (estPremier($i)) {
        // Affiche le nombre premier avec un saut de ligne
        echo "$i<br>";
    }
}
?>