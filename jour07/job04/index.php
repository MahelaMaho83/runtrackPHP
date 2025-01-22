<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
        // Ajouter le prénom dans un cookie
        setcookie('prenom', htmlspecialchars($_POST['prenom']), time() + 3600, '/');
    } elseif (isset($_POST['deco'])) {
        // Supprimer le cookie lors de la déconnexion
        setcookie('prenom', '', time() - 3600, '/');
    }
    // Recharger la page pour refléter les changements
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_COOKIE['prenom'])) {
    // Si le cookie "prenom" existe, afficher un message de bienvenue et le bouton de déconnexion
    echo "<h1>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !</h1>";
    echo "<form method='post'>
            <button type='submit' name='deco'>Déconnexion</button>
          </form>";
} else {
    // Sinon, afficher le formulaire de connexion
    echo "<form method='post'>
            <label for='prenom'>Prénom :</label>
            <input type='text' id='prenom' name='prenom' required>
            <button type='submit' name='connexion'>Connexion</button>
          </form>";
}
?>
</body>
</html>
