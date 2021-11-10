<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacje na łańcuchach</title>

    <style>
        table {
            border-collapse: collapse;
        }

        table tr td {
            border: 2px solid black;
            width: 10px;
            height: 10px;
            padding: 4px;
            text-align: center;
        }

        .css:nth-child(even) {
            background-color: #aaa;
        }

        .author {
            width: 100vw;
            height: 20px;
            position: fixed;
            bottom: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <h2>Zadanie 1</h2>

        <table>
            <tr>
                <?php
                    $string = str_split('Aplikacje');

                    foreach($string as $key)
                    {
                        echo '<td>' . $key . '</td>'; 
                    }
                ?>
            </tr>
            <tr>
                <?php
                    foreach($string as $key)
                    {
                        echo '<td class="css">' . $key . '</td>';
                    }
                ?>
            </tr>
            <?php
                foreach($string as $key)
                {
                    echo '<tr class="css"><td>' . $key . '</td></tr>';
                }
            ?>
        </table>
    </div>
    <p class="author">Autor: Krzysztof Bicz 4E2</p>
</body>
</html>