<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">

    <style>

        .container {
            background-color: darkgoldenrod;
            color: white;
            margin: 20px 0;
        }

        h2 {
            color: lightgreen;
        }

    </style>

    <title>snack 1 - snack 2</title>
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3">

                <!--
                SNACK 1 - Creiamo un array contenente le partite di basket di un'ipotetica
                tappa del calendario. Ogni array avrà una squadra di casa e una squadra
                ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
                Stampiamo a schermo tutte le partite con questo schema.
                Olimpia Milano - Cantù | 55-60
                -->

                <?php

                $matches = [
                        [
                           'homeTeam' => 'Pistons',
                           'guestTeam' => 'Magic',
                           'homeScore' => 112,
                           'guestScore' => 119

                        ],
                    [
                        'homeTeam' => 'Pelicans',
                        'guestTeam' => 'Warriors',
                        'homeScore' => 108,
                        'guestScore' => 123

                    ],
                    [
                        'homeTeam' => 'Grizzlies',
                        'guestTeam' => 'Knicks',
                        'homeScore' => 104,
                        'guestScore' => 118

                    ],
                    [
                        'homeTeam' => 'Wizards',
                        'guestTeam' => 'Pacers',
                        'homeScore' => 154,
                        'guestScore' => 141

                    ],
                    [
                        'homeTeam' => 'Hawks',
                        'guestTeam' => 'Trail Blazers',
                        'homeScore' => 123,
                        'guestScore' => 114

                    ],
                    [
                        'homeTeam' => 'Bulls',
                        'guestTeam' => 'Sixers',
                        'homeScore' => 154,
                        'guestScore' => 141

                    ],
                    [
                        'homeTeam' => 'Jazz',
                        'guestTeam' => 'Spurs',
                        'homeScore' => 110,
                        'guestScore' => 99

                    ],
                    [
                        'homeTeam' => 'Wizards',
                        'guestTeam' => 'Pacers',
                        'homeScore' => 154,
                        'guestScore' => 141

                    ],
                    [
                        'homeTeam' => 'Lakers',
                        'guestTeam' => 'Nuggets',
                        'homeScore' => 154,
                        'guestScore' => 141

                    ],
                ];

                ?>
                <h1>Final score:</h1>
                    <p>
                        <?php
                            for($i=0; $i<count($matches); $i++) {
                                echo '<p>' . $matches[$i]['homeTeam'] . ' ' . '-' . ' ' . $matches[$i]['guestTeam'] . ' ' . '|' . ' ' . $matches[$i]['homeScore'] . '-' . $matches[$i]['guestScore'] . '</p>';
                            }
                        ?>
                    </p>

                <!--
                SNACK 2 - Passare come parametri GET name, mail e age e verificare
                (cercando i metodi che non conosciamo nella documentazione)che name sia più lungo di 3 caratteri,
                che mail contenga un punto e una chiocciola e che age sia un numero.
                Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
                -->
                <h2>
                    <?php

                        $name = $_GET['nome'];
                        $mail = $_GET['mail'];
                        $age = $_GET['eta'];

                        // Funzioni utilizzate: strlen - strpos - is_numeric
                        if (strlen($name) > 3 && strpos($mail, '@') != false && strpos($mail, '.') != false && is_numeric($age)) {
                            var_dump('Accesso riuscito');
                        }else {
                            var_dump('Accesso negato');
                        };

                        // http://localhost:8888/?nome=paolo&mail=paolo@gmail.com&eta=35
                        // testare effettuando modifiche su: paolo - paolo@gmail.com - 35

                    ?>

                </h2>
            </div>
        </div>
    </div>

</body>
</html>