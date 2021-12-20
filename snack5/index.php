<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 5</title>
</head>
<body>

<!-- ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<div>

<?php

    $paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor aperiam consequuntur vitae harum, eum explicabo! Voluptatum voluptatem dolorem, voluptas praesentium vel porro ex nihil quidem exercitationem doloremque quis numquam cupiditate.
    Nisi modi, voluptate delectus excepturi autem quis vero, libero exercitationem possimus laudantium veritatis suscipit. Magnam, iusto similique assumenda animi soluta, saepe hic placeat neque nulla ipsam vitae quae quam. Repellat.
    Magnam error corrupti id dolorem accusamus unde. Ut vitae beatae, sunt doloremque adipisci in velit soluta harum odit eos delectus excepturi eveniet sint iste perferendis commodi minima architecto modi temporibus!
    Molestias iure alias maxime omnis amet ratione nemo tenetur magni, est quo explicabo quasi inventore blanditiis atque quam illum autem perferendis mollitia doloremque? Aspernatur officia quaerat quasi praesentium eius voluptate.
    Autem tenetur, blanditiis dolorum ipsum labore, animi nesciunt temporibus provident accusamus dolores inventore! Officiis eaque quibusdam tempore temporibus qui recusandae itaque nihil ab, iusto, distinctio veritatis non quae provident expedita.';

    echo $paragraph;

    $paragraphs = explode('.', $paragraph);

    for($i = 0; $i < count($paragraphs); $i++){
        echo "<p>" . $paragraphs[$i] . "." . "</p>";
    }

?>

</div>
    
</body>
</html>