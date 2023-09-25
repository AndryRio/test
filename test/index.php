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

        /*$firstName = 'Gio';

        $firstName = 'Joe';

        $x = 1;
        $y = &$x;

        $x = 3;

        echo $y;


        echo 'Hello '.$firstName ;

        // CONSTANTS

        define('STATUS_PAID', 'paid');

        echo defined('STATUS_PAID');

        const STATUS_PAID = 'paid';

        if(true) {
            define('STATUS_PAID', 9);
        }

        $paid = 'PAID';
        
        define('STATUS_'. $paid, $paid);

        echo STATUS_PAID;

        echo PHP_VERSION;

        echo __FILE__;*/

        // VARIABLE VARIABLES

        $foo = 'bar';

        $$foo = 'baz';
        
        echo $foo, $$foo;

        ?>
    
</body>
</html>



