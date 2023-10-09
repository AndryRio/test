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
     
    echo $x;

    // Compraison Operators (== === != <> !== ?? ?:)
    $x = 'Hello World';
    $y = strpos($x, 'H');

    $result = $y === false ? 'H Not Found' : 'H Found at index ' . $y;

    echo $result. '<br />';
    
    $a = null;
    $b = $a ?? 'No data';

    var_dump($b);

    // Error Control Operators (@)
    $x = @file('foo.txt');

    // Increment/Decrement Operators (++, --)
    $x = 5;

    echo ++$x;

    // Logical Operators (&& || ! and or xor)
    $x = false;
    $y = false;

    function hello() {
        echo 'Hello World';

        return false;
    }

    var_dump($x && hello() || true);

    // Bitwise Operators (& | ^ ~ << >> )
    $x = 6;
    $y = 1;

    // 110
    // >>
    // 11

    var_dump($x >> $y);*/

    // Array Operators (+ == === != <> !==)
    $x = ['a' => 1, 'b' => 2, 'c' => 3];
    $y = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];

    $z = $x + $y;

    print_r($z);

    ?>

</body>
</html>