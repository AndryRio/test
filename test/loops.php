<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    // WHILE
    /*$i = 0;
    while ($i <= 15) {
        if ($i % 2 === 0) {
            $i++;

            continue;
        }

        echo $i++. ', ';

    }

    // DO-WHILE
    $i = 0;
    do {
        echo $i++;
    }
    while ($i <= 15);

    // FOR
    $text = ['a', 'b', 'c', 'd'];
    for ($i = 0, $lenght = count($text); $i < $lenght; $i++) {
        echo $text[$i]. '<br />';
    }

    // FOREACH
    $programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

    foreach($programmingLanguages as $key => &$language) {
        echo $key . ': '.  $language . '<br />';
    }

    unset($language);

    $language = 'php';
    print_r($programmingLanguages);*/
    //----------------------------------------------------------------

    $user = [
        'name' => 'Gio',
        'email' => 'gio@email.com',
        'skills' => ['php', 'graphql', 'react'],
    ];
     foreach($user as $key => $value) {
        echo $key . ': ';
        
        if (is_array($value)) {
            foreach($value as $skill) {
                echo $skill . ' - ';
            }
        }
        else {
            echo $value;
        }

        echo '<br />';

     }



    ?>

</body>
</html>