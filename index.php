<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Model\ChessBoardModel;

// $board = new ChessBoardModel();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP POO - Jeu d'échecs</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <table>
        <?php

        for ($x = 1; $x <9; $x++) {
            echo '<tr>';

            for ($y = 1; $y <9; $y++) {
                $xy = $x + $y;
                if ($xy % 2 == 0) {
                    echo '<td style="background-color: #FFCE9E">
                        Case
                    </td>';
                } else {
                echo '<td style="background-color: #D18B47">
                        Case
                    </td>';
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>