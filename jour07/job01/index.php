<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Nombre de visites : <span id="compteur">0</span></h1>
    <button id="reset">Réinitialiser</button>

    <script>
        // Récupère ou initialise le compteur dans le stockage local
        let nbvisites = localStorage.getItem('nbvisites');
        nbvisites = nbvisites ? parseInt(nbvisites, 10) : 0;

        // Incrémente le compteur à chaque visite
        nbvisites++;
        localStorage.setItem('nbvisites', nbvisites);

        // Affiche le compteur
        const compteurElement = document.getElementById('compteur');
        compteurElement.textContent = nbvisites;

        // Réinitialise le compteur lorsqu'on clique sur le bouton "reset"
        const resetButton = document.getElementById('reset');
        resetButton.addEventListener('click', () => {
            nbvisites = 0;
            localStorage.setItem('nbvisites', nbvisites);
            compteurElement.textContent = nbvisites;
        });
    </script>
</body>
</html>