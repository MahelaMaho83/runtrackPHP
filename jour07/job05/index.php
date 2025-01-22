<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #000;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
<?php
session_start();

// Initialiser la grille et les variables de session
if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['turn'] = 'X';
}

function check_winner($grid) {
    // Vérifier les lignes, colonnes et diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] !== '-' && $grid[$i][0] === $grid[$i][1] && $grid[$i][1] === $grid[$i][2]) {
            return $grid[$i][0];
        }
        if ($grid[0][$i] !== '-' && $grid[0][$i] === $grid[1][$i] && $grid[1][$i] === $grid[2][$i]) {
            return $grid[0][$i];
        }
    }
    if ($grid[0][0] !== '-' && $grid[0][0] === $grid[1][1] && $grid[1][1] === $grid[2][2]) {
        return $grid[0][0];
    }
    if ($grid[0][2] !== '-' && $grid[0][2] === $grid[1][1] && $grid[1][1] === $grid[2][0]) {
        return $grid[0][2];
    }
    return null;
}

function is_draw($grid) {
    foreach ($grid as $row) {
        if (in_array('-', $row)) {
            return false;
        }
    }
    return true;
}

// Gérer les clics sur les cases
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        // Réinitialiser la partie
        $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
        $_SESSION['turn'] = 'X';
    } else {
        foreach ($_POST as $key => $value) {
            [$row, $col] = explode('-', $key);
            if ($_SESSION['grid'][$row][$col] === '-') {
                $_SESSION['grid'][$row][$col] = $_SESSION['turn'];
                $_SESSION['turn'] = $_SESSION['turn'] === 'X' ? 'O' : 'X';
                break;
            }
        }
    }
}

$winner = check_winner($_SESSION['grid']);
if ($winner) {
    echo "<h2 style='text-align: center;'>$winner a gagné !</h2>";
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['turn'] = 'X';
} elseif (is_draw($_SESSION['grid'])) {
    echo "<h2 style='text-align: center;'>Match nul !</h2>";
    $_SESSION['grid'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['turn'] = 'X';
}
?>

<table>
    <form method="post">
        <?php foreach ($_SESSION['grid'] as $rowIndex => $row): ?>
            <tr>
                <?php foreach ($row as $colIndex => $cell): ?>
                    <td>
                        <?php if ($cell === '-'): ?>
                            <button type="submit" name="<?= $rowIndex . '-' . $colIndex ?>">-</button>
                        <?php else: ?>
                            <?= $cell ?>
                        <?php endif; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </form>
</table>

<form method="post" style="text-align: center;">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>
