<?php

$lg = [
    'PY' => 'Python',
    'JS' => 'JavaScript',
    'J' => 'Java'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            color: rgb(0, 0, 0);
            background-color: rgb(255, 255, 255);
        }

        h1 {
            color: rgb(0, 0, 0);
            text-align: center;
            height: 25px;
        }

        table {
            width: 40%;
            margin: auto;
            border: 1px solid rgb(0, 0, 0);
            background-color: rgb(255, 255, 255);
        }

        table, tr, td {
            border: 1px solid #000000;
            border-collapse: collapse;
        }

        th {
            border: 1px solid rgb(0, 0, 0)
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Nome das linguagens:</th>
        </tr>
        <tr>
            <td>
                <?php
                echo $lg['PY'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $lg['JS'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo $lg['J'];
                ?>
            </td>
        </tr>
    </table>
</body>

</html>