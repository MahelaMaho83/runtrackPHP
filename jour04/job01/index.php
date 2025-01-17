 <?php
// Vérifie si des paramètres sont passés dans l'URL
if (!empty($_GET)) {
    // Compte le nombre de paramètres dans $_GET
    $nombreArguments = count($_GET);

    // Affiche le nombre d'arguments
    echo "Nombre d'arguments passés via \$_GET : " . $nombreArguments;

    // Affiche les clés et valeurs des arguments
    echo "<ul>";
    foreach ($_GET as $cle => $valeur) {
        echo "<li><strong>" . htmlspecialchars($cle) . "</strong>: " . htmlspecialchars($valeur) . "</li>";
    }
    echo "</ul>";
} else {
    // Message si aucun paramètre n'est passé
    echo "Aucun argument n'a été passé via \$_GET.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <h1>Formulaire de test (GET)</h1>
    <form method="get" action="">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age"><br>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>