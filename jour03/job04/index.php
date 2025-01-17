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

// Définition de la chaîne
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcours de la chaîne en affichant un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}

// Définition de la chaîne pour extraire les voyelles
$str = "I'm sorry Dave I'm afraid I can't do that";

// Parcours de la chaîne et affichage des voyelles
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
foreach (str_split($str) as $char) {
    if (in_array($char, $vowels)) {
        echo $char;
    }
}

// Définition de la chaîne pour compter les caractères
$str = "Dans l'espace, personne ne vous entend crier";

// Compter et afficher le nombre de caractères
$charCount = strlen($str);
echo "Le nombre de caractères dans la chaîne est : $charCount";
?>
