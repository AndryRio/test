<?php 

    // Return

    /*function sum (int $x, int $y) {
        $z = $x + $y;

        return $z;
    }

    $x = sum(5, 10);

    echo $x;

    return;

    echo '<br />';
    echo 'Hello World';*/

    // Declare - ticks
    /*function onTick() {
        echo 'Tick<br />';
    }

    register_tick_function('onTick');

    declare(ticks=3);

    $i = 0;
    $lenght = 10;

    while ($i<$lenght) {
        echo $i++ . '<br />';
    }*/

    // Declare - encoding

    // Declare - strict_types
    declare(strict_types=1);

    function sum(int $x, int $y) {
        return $x + $y;
    }



    ?>