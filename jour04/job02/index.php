<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments GET</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Arguments $_GET et leurs valeurs</h1>

    <?php
    // Vérifie si $_GET contient des données
    if (!empty($_GET)) {
        echo '<table>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>';

        // Parcourt les arguments et affiche chaque paire clé-valeur
        foreach ($_GET as $key => $value) {
            echo '<tr>
                    <td>' . htmlspecialchars($key) . '</td>
                    <td>' . htmlspecialchars($value) . '</td>
                  </tr>';
        }

        echo '    </tbody>
              </table>';
    } else {
        echo '<p style="text-align: center;">Aucun argument $_GET n&#39;a été fourni.</p>';
    }
    ?>
</body>
</html>
