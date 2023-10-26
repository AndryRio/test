<?php 

// Functions

/*var_dump(foo());

if(true) {
    function foo() {
    return 'Hello World';
    }
}*/

/*foo();
bar();

function foo() {
    echo 'Foo';
    function bar() {
        echo 'Bar';
    }
}*/

declare(strict_types=1);

function foo(): mixed //or int|float|array ecc... 
{
    return [1.5];
}

var_dump(foo());

?>