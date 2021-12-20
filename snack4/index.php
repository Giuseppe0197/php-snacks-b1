<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>
</head>
<body>

<!-- ## Snack 4

Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<div>
    <?php

        function getArrayOfIntergers($min, $max, $nItems){
            $newArray = [];

            while(count($newArray) < $nItems) {
                $number = rand($min, $max);

                if(!in_array($number, $newArray)) {
                    $newArray[] = $number;
                }
            }

            for($i = 0; $i < count($newArray); $i++){
                echo "<p>" . $newArray[$i] . "</p>";
            }

            return $newArray;
        }

        getArrayOfIntergers(1, 50, 15);

    ?>
</div>
    
</body>
</html>