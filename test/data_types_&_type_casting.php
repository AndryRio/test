<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
        // Data Types & Type Casting

    # 4 Scalar Types
        # bool - true/false;
        $completed = true;
        # int - 1, 2, 3, 0, -4
        $score = 75;
        #float - 1.4, 0.2, 0.002, -15.43
        $price = 0.99;
        #string - "Gio", "Hello World"
        $greeting = "Hello Gio";

        echo $completed . '<br />';
        echo $score . '<br />';
        echo $price . '<br />';
        echo $greeting . '<br />';

        var_dump($completed);
        echo gettype ($score). '<br />';

    # 4 Compound Types
        #array
        $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
        print_r ($companies);
        echo "<br />";
        #object
        #callable
        #interable

    # 2 Special Types
        #resourse
        #null

        function sum(float $x, float $y) {
            $x = 5.5;
            var_dump($x, $y);
            echo '<br />';
            return $x + $y;
        }

        $sum = sum(2, 3);
         
        echo $sum. '<br />';

        var_dump($sum);

        $x = (int) '5';

        var_dump($x);
    
    ?>

</body>
</html>