<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    // STRINGS

    /*$firstName = 'Will';
    $lastName = 'Smith';

    $name = $firstName. ' '. $lastName;

    echo $name. '<br />';

    echo $name[-2]. '<br />';

    $name[15] = 'I';

    echo $name. '<br />';

    var_dump($name);*/

    $x = 1;
    $y = 2;

    // Herodoc

    $text = <<<TEXT
    Line 1 $x
    Line 2 $y
    Line 3
    TEXT;

    echo nl2br($text);

    // Nowdoc

    $text = <<<'TEXT'
    Line 1 $x
    Line 2 $y
    Line 3
    TEXT;

    echo '<br />';
    echo nl2br($text);

    ?>

</body>
</html>