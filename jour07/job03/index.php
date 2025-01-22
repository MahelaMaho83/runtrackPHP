<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Prénoms</title>
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
        input {
            padding: 10px;
            font-size: 16px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Ajoutez des prénoms</h1>
    <form id="prenomForm">
        <input type="text" id="prenomInput" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
    </form>
    <ul id="prenomList"></ul>
    <button id="reset">Réinitialiser la liste</button>

    <script>
        // Récupère ou initialise la liste des prénoms dans la sessionStorage
        let prenoms = sessionStorage.getItem('prenoms');
        prenoms = prenoms ? JSON.parse(prenoms) : [];

        // Affiche la liste des prénoms
        const prenomListElement = document.getElementById('prenomList');
        const displayPrenoms = () => {
            prenomListElement.innerHTML = '';
            prenoms.forEach(prenom => {
                const li = document.createElement('li');
                li.textContent = prenom;
                prenomListElement.appendChild(li);
            });
        };
        displayPrenoms();

        // Ajout d'un prénom au formulaire
        const prenomForm = document.getElementById('prenomForm');
        const prenomInput = document.getElementById('prenomInput');
        prenomForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const prenom = prenomInput.value.trim();
            if (prenom) {
                prenoms.push(prenom);
                sessionStorage.setItem('prenoms', JSON.stringify(prenoms));
                displayPrenoms();
                prenomInput.value = '';
            }
        });

        // Réinitialise la liste des prénoms
        const resetButton = document.getElementById('reset');
        resetButton.addEventListener('click', () => {
            prenoms = [];
            sessionStorage.setItem('prenoms', JSON.stringify(prenoms));
            displayPrenoms();
        });
    </script>
</body>
</html>
