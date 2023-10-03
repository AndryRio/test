<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    // ARRAYS

    /*$programmingLanguages = ['PHP', 'Java', 'Pyton'];

    var_dump(isset($programmingLanguages[3]));

    echo $programmingLanguages[1]. '<br />';

    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';

    echo count($programmingLanguages);
    echo '<br />';

    array_push($programmingLanguages, 'C++', 'C', 'GO');

    //$programmingLanguages[] = 'C++';

    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';

    echo count($programmingLanguages);

    $programmingLanguages = [
        'php' => [
            'creator' => 'Rasmus Lerdorf',
            'extension' => '.php',
            'website' => 'www.php.net',
            'isOpenSource' => true,
            'versions' => [
                ['version' => 8, 'relaseDate' => 'Nov 26, 2020'],
                ['version' => 7.4, 'relaseDate' => 'Nov 28, 2019'],
            ],
        ],
        'pyton' => [
            'creator' => 'Guido Van Rossum',
            'extension' => '.py',
            'website' => 'www.pyton.org',
            'isOpenSource' => true,
            'versions' => [
                ['version' => 3.9, 'relaseDate' => 'Oct 5, 2020'],
                ['version' => 3.8, 'relaseDate' => 'Oct 14, 2019'],
            ]
        ]
    ];

    //$newLanguage = 'go';
    
    //$programmingLanguages[$newLanguage] = '1.15';

    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';

    //echo $programmingLanguages['php']['versions'][0]['relaseDate'];

    $array = ['a', 'b', 50 => 'c', 'd', 'e'];

    unset($array[50], $array[1]);
    //echo array_shift($array);
    //echo array_pop($array);

    echo '<pre>';
    print_r($array);
    echo '</pre>';

    //echo $array[null];*/

    $array = ['a' => 1, 'b' => null];

    var_dump(array_key_exists('b', $array));

    var_dump(isset($array['b']));

    ?>

</body>
</html>