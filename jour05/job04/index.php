<?php
// Déclaration de la fonction hello()
function hello() {
    echo "Hello La Plateforme !";
}

// Appel de la fonction hello()
hello();

// Déclaration de la fonction bonjour()
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Déclaration de la fonction getHello()
function getHello() {
    return "Hello LaPlateforme!";
}

// Appel de la fonction getHello() et affichage de sa valeur de retour
echo getHello();

// Déclaration de la fonction calcule()
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : division par zéro.";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur : division par zéro.";
            }
        default:
            return "Opération non reconnue.";
    }
}

?>
