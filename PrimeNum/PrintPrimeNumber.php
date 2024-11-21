<!DOCTYPE html>
<html>
    <head>
     Displays prime numbers less than 100:
    </head>
    <body>
        <?php
        for ($i = 2; $i < 100; $i++) {
            $isPrime = true;
            for( $j = 2; $j * $j <= $i; $j++ ) {
                if( $i % $j == 0) {
                    $isPrime = false;   
                    break;
            }
        }
        if( $isPrime ) {
            echo $i . ",";
        }
    }
        ?>
    </body>
</html>