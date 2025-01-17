<?php
// Déclaration des variables de types primitifs
$isAvailable = true; // boolean
$age = 25; // entier
$name = "LaPlateforme"; // chaîne de caractères
$price = 19.99; // nombre à virgule flottante

// Tableau des variables
$variables = [
    ["type" => "boolean", "nom" => "isAvailable", "valeur" => $isAvailable ? "true" : "false"],
    ["type" => "integer", "nom" => "age", "valeur" => $age],
    ["type" => "string", "nom" => "name", "valeur" => $name],
    ["type" => "float", "nom" => "price", "valeur" => $price],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: left;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tableau des Variables</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $variable): ?>
                <tr>
                    <td><?= $variable["type"] ?></td>
                    <td><?= $variable["nom"] ?></td>
                    <td><?= $variable["valeur"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>