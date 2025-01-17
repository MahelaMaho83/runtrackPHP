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
for ($i = 0; $i < mb_strlen($str); $i += 2) {
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

// Définition de la chaîne et initialisation du dictionnaire
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = ["consonnes" => 0, "voyelles" => 0];

// Liste des voyelles
$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcours de la chaîne
foreach (str_split($str) as $char) {
    if (ctype_alpha($char)) {
        if (in_array($char, $vowels)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr></tbody>";
echo "</table>";

// Définition de la chaîne pour l'écriture à l'envers
$str = "Les choses que l'on Possède finissent par nous posséder.";

// Écriture de la chaîne à l'envers
$reversedStr = strrev($str);
echo $reversedStr;
?>