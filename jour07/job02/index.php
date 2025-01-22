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
        // Fonction pour définir un cookie
        function setCookie(name, value, days) {
            let expires = "";
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        // Fonction pour récupérer un cookie
        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Récupère ou initialise le compteur dans un cookie
        let nbvisites = getCookie('nbvisites');
        nbvisites = nbvisites ? parseInt(nbvisites, 10) : 0;

        // Incrémente le compteur à chaque visite
        nbvisites++;
        setCookie('nbvisites', nbvisites, 7); // Cookie valable 7 jours

        // Affiche le compteur
        const compteurElement = document.getElementById('compteur');
        compteurElement.textContent = nbvisites;

        // Réinitialise le compteur lorsqu'on clique sur le bouton "reset"
        const resetButton = document.getElementById('reset');
        resetButton.addEventListener('click', () => {
            nbvisites = 0;
            setCookie('nbvisites', nbvisites, 7);
            compteurElement.textContent = nbvisites;
        });
    </script>
</body>
</html>
