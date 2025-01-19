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

?>