<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Maison</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        pre {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            white-space: pre-wrap;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="largeur">Largeur</label>
        <input type="text" id="largeur" name="largeur" required>

        <label for="hauteur">Hauteur</label>
        <input type="text" id="hauteur" name="hauteur" required>

        <button type="submit">Dessiner la maison</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $largeur = intval($_POST['largeur'] ?? 0);
        $hauteur = intval($_POST['hauteur'] ?? 0);

        if ($largeur > 0 && $hauteur > 0) {
            // Dessin du toit
            $maison = "";
            for ($i = 0; $i < $largeur / 2; $i++) {
                $espaces = str_repeat(' ', ($largeur / 2) - $i - 1);
                $etoiles = str_repeat('*', 2 * $i + 1);
                $maison .= $espaces . $etoiles . "\n";
            }

            // Dessin des murs
            for ($j = 0; $j < $hauteur; $j++) {
                $mur = "|" . str_repeat(' ', $largeur - 2) . "|";
                $maison .= $mur . "\n";
            }

            // Dessin du sol
            $sol = str_repeat('-', $largeur);
            $maison .= $sol;

            echo '<pre>' . htmlspecialchars($maison) . '</pre>';
        } else {
            echo '<p style="color: red;">Veuillez entrer des dimensions valides pour la largeur et la hauteur.</p>';
        }
    }
    ?>
</body>
</html>
