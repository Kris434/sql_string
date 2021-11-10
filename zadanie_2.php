<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacje na łańcuchach</title>

    <style>
        form {
            margin-bottom: 10px;
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
        <h2>Zadanie 2</h2>
        
        <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label>Wprowadź tekst do konwersji<br><textarea placeholder="Wprowadź tekst do konwersji" name="text"></textarea></label>
            <br>
            <button>Konwertuj</button>
        </form>

        <?php
            if(isset($_GET['text']))
            {
                $text = $_GET['text'];

                echo '<p>Wprowadziłeś tekst: ' . $text . '</p><br>';

                echo '<p>Tekst wielkimi literami: ' . strtoupper($text) . '</p><br>';

                echo '<p>Tekst małymi literami: ' . strtolower($text) . '</p><br>';

                echo '<p>Pierwsza litera w zdaniu jest wielka: ' . ucfirst($text) . '</p><br>';

                echo '<p>Pierwsze litery słów są wielkie: ' . ucwords($text) . '</p><br>';

                $tab_str = explode(' ', $text);
                $s = "";

                echo '<p>Pierwsze litery z trzech wyrazów: ';
                for($i = 0; $i < 3; $i++)
                {
                    $s = $tab_str[$i];
                    echo $s[0];
                }

                echo '</p><br><p>Wpisany tekst ma: ' . count(str_split(trim($text))) . ' znaków</p><br>';

                echo 'Tekst wypisany w kolumnie: <br>';
                foreach($tab_str as $key)
                {
                    echo $key . '<br>';
                }
            }
        ?>
    </div>
    <p class="author">Autor: Krzysztof Bicz 4E2</p>
</body>
</html>