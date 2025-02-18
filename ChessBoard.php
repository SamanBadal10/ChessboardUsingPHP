<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chessboard</title>
    <style>
        table {
            width: 270px;
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
        }
        .white {
            background-color: white;
        }
        .black {
            background-color: black;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
