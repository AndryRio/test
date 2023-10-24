<?php 

/*$x = 5;

require_once 'file.php';

echo $x . '<br />';

require_once 'file.php';

echo $x . '<br />';

echo 'Hello World';*/

/*$x = 5;

$y = include 'file.php';

echo $x . '<br />';

var_dump($y);*/

ob_start();
include './partials/nav.php';
$nav = ob_get_clean();

$nav = str_replace('About', 'About us', $nav);

echo $nav;

?>