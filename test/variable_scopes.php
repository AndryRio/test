<?php 

//$x = 5;

/*function foo() {
    $GLOBALS['x'] = 10;

    echo $GLOBALS['x'];
}

foo();

echo $x;*/

/*include('./partials/script1.php');

echo '<br />';
echo $x; */

function getValue() {
    static $value = null;

    if ($value === null) {
        $value = someVeryExpensiveFunction();
    }

    // some more processing with $value

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);

    echo 'Processing'. '<br />';

    return 10;
}

echo getValue(). '<br />';
echo getValue(). '<br />';
echo getValue(). '<br />';

?>