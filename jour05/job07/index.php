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

// Déclaration de la fonction occurrences()
function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    return $count;
}

// Déclaration de la fonction leetSpeak()
function leetSpeak($str) {
    $leetMap = [
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'I' => '1', 'i' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    $leetStr = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $leetStr .= $leetMap[$char] ?? $char;
    }
    return $leetStr;
}

// Fonction pour appliquer le style "gras"
function gras($str) {
    return preg_replace('/\b[A-Z][a-z]*\b/', '<b>$0</b>', $str);
}

// Fonction pour appliquer le chiffrement de César
function cesar($str, $shift = 2) {
    $result = "";
    $shift = $shift % 26;
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $offset = ctype_upper($char) ? 65 : 97;
            $result .= chr((ord($char) + $shift - $offset) % 26 + $offset);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

// Fonction pour appliquer le style "plateforme"
function plateforme($str) {
    return preg_replace('/\b\w*me\b/', '$0_', $str);
}

// Gestion du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputStr = $_POST['str'] ?? '';
    $transformation = $_POST['transformation'] ?? '';

    switch ($transformation) {
        case 'gras':
            echo gras($inputStr);
            break;
        case 'cesar':
            $shift = $_POST['shift'] ?? 2;
            echo cesar($inputStr, $shift);
            break;
        case 'plateforme':
            echo plateforme($inputStr);
            break;
        default:
            echo "Transformation non reconnue.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de Texte</title>
</head>
<body>
    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" name="str" id="str" required>

        <label for="transformation">Transformation :</label>
        <select name="transformation" id="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>

        <label for="shift">Décalage (pour César) :</label>
        <input type="number" name="shift" id="shift" value="2">

        <button type="submit">Transformer</button>
    </form>
</body>
</html>
