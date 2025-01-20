<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer de style</title>
    <link id="styleSheet" rel="stylesheet" href="style1.css">
</head>
<body>
    <form id="styleForm" action="#" method="post">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1.css">Style 1</option>
            <option value="style2.css">Style 2</option>
            <option value="style3.css">Style 3</option>
        </select>
        <button type="submit">Valider</button>
    </form>

    <script>
        // Gestionnaire d'événement pour le formulaire
        document.getElementById('styleForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche le rechargement de la page

            // Récupère la valeur sélectionnée dans la liste déroulante
            const selectedStyle = document.getElementById('style').value;

            // Change le fichier CSS en fonction de la sélection
            document.getElementById('styleSheet').setAttribute('href', selectedStyle);
        });
    </script>
</body>
</html>
