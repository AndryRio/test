<?php 

/*$currentTime = time();

echo $currentTime . '<br />';

echo $currentTime + 5 * 24 * 60 * 60 . '<br />';

echo $currentTime - 60 * 60 * 24 . '<br />';

echo date('m/d/Y g:ia') . '<br />';

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24) . '<br />';

echo date_default_timezone_get() . '<br />';

date_default_timezone_set('UTC');

echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';

echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24) . '<br />';

echo date_default_timezone_get() . '<br />';*/

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br />';

echo date ('m/d/Y g:ia', strtotime('2021-01-18 7:00:00')) . '<br />';

$date = date ('m/d/Y g:ia', strtotime('second friday of January')) . '<br />';

echo '<pre>';
print_r(date_parse($date));
echo '</pre>';

?>