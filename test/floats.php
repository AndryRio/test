<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        // FLOATS

        $x = ceil((0.1 + 0.7) * 10);

        var_dump($x);

        echo $x.'<br />';
        
        echo PHP_FLOAT_MAX;

        $y = ceil((0.1 + 0.2) * 10);

        echo $y;

        echo "<br />";

        $x = 0.23;
        $y = 1 - 0.77;

        var_dump($x, $y);

        if($x == $y) {
            echo 'Yes'. "<br />";
        }
        else {
            echo 'No'. "<br />";
        }

        $x = ceil((0.1 + 0.2) * 10);

        //NAN
        echo log(-1);

        //INF
        $y = PHP_FLOAT_MAX * 2;

        var_dump(is_finite($y));

        var_dump($y);

        $x = 5;

        var_dump((float) $x);
    
    ?>

</body>
</html>