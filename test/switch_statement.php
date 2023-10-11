<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    /*$paymentStatuses = [1, 3, 0];


    foreach($paymentStatuses as $paymentStatus) {
        switch($paymentStatus) {
            case 1:
                continue 2;
                echo 'Paid';
            

            case 2:
            case 3:
                echo 'Payment Declined';
                break;

            case 4:
                echo 'Panding Payment';
                break;

            default:
                echo 'Unknown Payment Status';
        }

    echo '<br />';
    }*/

    //------------------------------------------------------------------------------

    function x() {
        sleep(3);

        echo 'Done <br />';

        return 3;
    }

    /*$x = x();
    if ($x === 1) {
        echo 1;
    }
    elseif ($x === 2) {
        echo 2;                                 
    }
    else if ($x === 3) {
        echo 3;
    }
    else {
        echo 4;
    }*/

    switch (x()) {
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        case 3:
            echo 3;
            break;
        default:
            echo 4;
    }

    ?>

</body>
</html>