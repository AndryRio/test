<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        <?= 'Hello World' ?>
    </h1>
    <?php

        $firstName = 'Gio';

        $x = 1;
        $y = &$x;

        $x = 3;

        //echo $y;


        echo 'Hello '.$firstName ;

        ?>
    
</body>
</html>



