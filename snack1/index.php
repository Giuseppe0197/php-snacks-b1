<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>

<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->

<div>

<?php 
    $matches = [
        [
            'home' => 'Lazio',
            'visitors' => 'Roma',
            'pointsHome' => '75',
            'pointsVisitors' => '50'
        ],

        [
            'home' => 'Milan',
            'visitors' => 'Inter',
            'pointsHome' => '35',
            'pointsVisitors' => '97'
        ],

        [
            'home' => 'Torino',
            'visitors' => 'Juventus',
            'pointsHome' => '56',
            'pointsVisitors' => '88'
        ],

        [
            'home' => 'Napoli',
            'visitors' => 'Bologna',
            'pointsHome' => '52',
            'pointsVisitors' => '43'
        ]
    ];

    /* var_dump($matches); */

    for($i = 0; $i < count($matches); $i++){
        echo $matches[$i]['home'] . ' -' . $matches[$i]['visitors'] . ' |' . $matches[$i]['pointsHome'] . ' -' . $matches[$i]['pointsVisitors'] . "<br>";
    }
?>

</div>


    
</body>
</html>