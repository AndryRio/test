<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    // OPERATORS

    // Arithmetic Operators (+ - * / % **)
    /*$x = -10;
    $y = 3;

    var_dump(fdiv($x, $y));
    echo '<br />';
    var_dump(fmod($x, $y));


    // Assignment Operators (= += -= *= /= %= **=)
    $x = 5;

    $x *= 3;

    echo $x;

    // String Operaotrs (. )
    $x = 'Hello';

    $x = $x. ' World';
     
    echo $x;*/

    // Compraison Operators (== === != <> !== ?? ?:)
    $x = 'Hello World';
    $y = strpos($x, 'H');

    $result = $y === false ? 'H Not Found' : 'H Found at index ' . $y;

    echo $result. '<br />';
    
    $a = null;
    $b = $a ?? 'No data';

    var_dump($b);

    ?>

</body>
</html>