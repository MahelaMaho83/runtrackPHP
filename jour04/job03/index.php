<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments GET et POST</title>
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
    <h1 style="text-align: center;">Arguments $_GET et $_POST</h1>

    <?php
    // Vérifie si $_GET contient des données
    if (!empty($_GET)) {
        echo '<h2 style="text-align: center;">Arguments $_GET</h2>';
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

    // Affiche le nombre d'arguments $_POST
    echo '<h2 style="text-align: center;">Nombre d&#39;arguments $_POST : ' . count($_POST) . '</h2>';

    // Vérifie si $_POST contient des données
    if (!empty($_POST)) {
        echo '<table>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>';

        // Parcourt les arguments et affiche chaque paire clé-valeur
        foreach ($_POST as $key => $value) {
            echo '<tr>
                    <td>' . htmlspecialchars($key) . '</td>
                    <td>' . htmlspecialchars($value) . '</td>
                  </tr>';
        }

        echo '    </tbody>
              </table>';
    } else {
        echo '<p style="text-align: center;">Aucun argument $_POST n&#39;a été fourni.</p>';
    }
    ?>
</body>
</html>
