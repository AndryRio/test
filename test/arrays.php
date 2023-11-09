<?php 

require './partials/helpers.php';

// ----------------------------------------------------------------

// array_chunk (array $array, int $lnght, bool $prseervKeys = false): array

/*$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true));*/

// ----------------------------------------------------------------

// array_combine(array $keys, array $values): array

/*$array1 = ['a', 'b', 'c'];      // keys
$array2 = [5, 10, 15];          // values

prettyPrintArray(array_combine($array1, $array2));*/

// ----------------------------------------------------------------

// array_filter (array $array, callable|null $callback = null, int $mode = 0): array

/*$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

$even = array_values($even);

prettyPrintArray($even);*/

// ----------------------------------------------------------------

// array_keys(array $keys, mixed $search_value, bool $strict = false): array

/*$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

$keys = array_keys($array, 10, true);

prettyPrintArray($keys);*/

// ----------------------------------------------------------------

// array_map(callable|null $callback, array $array, array ...$arrays): array

/*$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];

$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);

prettyPrintArray($array);*/

// ----------------------------------------------------------------

// array_merge(array ...$arrays): array 

/*$array1 = [1, 2, 3];
$array2 = ['a' => 4, 'b' => 5, 'c' => 6];
$array3 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);*/

// ----------------------------------------------------------------

// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed

/*$invoiceItems = [
    ['price' => 9.99,   'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99,  'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149,    'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99,  'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99,   'qty' => 4, 'desc' => 'Item 5'],
];

$total = array_reduce(
    $invoiceItems,
     fn($sum, $item) => $sum + $item['qty'] * $item ['price'], 500

);

echo $total;*/

// ----------------------------------------------------------------

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

/*$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

$key = array_search('a', $array);

if (in_array('a', $array)) {
    echo 'Letter found';
}*/

// ----------------------------------------------------------------

/*
$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['d' => 4, 'g' => 5, 'i' => 6, 'j' => 7, 'k' => 8];
$array3 = ['l' => 3, 'm' => 0, 'n' => 10];

prettyPrintArray(array_diff($array1, $array2, $array3));

prettyPrintArray(array_diff_assoc($array1, $array2, $array3));
*/

// ----------------------------------------------------------------

/*$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($array);

// asort, ksort, usort 

usort($array, fn($a, $b) => $b <=> $a);

prettyPrintArray($array);*/

// ----------------------------------------------------------------

$array = [1, 2, 3];

[1 => $a, 0 => $b, 2 => $c] = $array;

echo $a . ', ' . $b . ', ' . $c. '<br />';

?>