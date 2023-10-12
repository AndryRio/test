<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    $paymentStatus = false;


    switch($paymentStatus) {
        case 1:
            echo 'Paid';
            break;

        case 2:
        case 3:
            echo 'Payment Declined';
            break;

        case 0:
            echo 'Panding Payment';
            break;

        default:
            echo 'Unknown Payment Status';
    }

    echo '<br />';

    //switch ==
    //match ===

    $paymentStatusDisplay = match($paymentStatus) {
        1 > 2 => 'Paid',
        2,3 => 'Payment Declined',
        0 => 'Pending Payment',
        default => 'Unknown Payment Status',
    };

    echo $paymentStatusDisplay;


    

    ?>

</body>
</html>