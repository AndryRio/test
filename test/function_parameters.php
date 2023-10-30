<?php 

declare(strict_types=1);

/*function foo(int|float &$x, int|float $y): int|float {
    if ($x % 2 === 0) {
        $x /= 2;
    }

    return $x * $y;
}

$a = 6.0;
$b = 7;

echo foo($a, $b) . '<br />';

var_dump($a, $b);*/

/*function sum(int|float $x, int|flaot $y, int|float ...$numbers): int|float {
    return $x + $y + array_sum($numbers);
}

$a = 6.0;
$b = 7;
$numbers = [50, 100, 25, 8, 9];

echo sum($a, $b, ...$numbers) . '<br />';*/

function foo(int $x, int $y): int {
    var_dump($x, $y);
    if ($x % $y === 0) {
        return $x / $y;
    }

    return $x;
}

$arr = ['y' => 2, 'x' => 1];

echo foo(...$arr);




?>