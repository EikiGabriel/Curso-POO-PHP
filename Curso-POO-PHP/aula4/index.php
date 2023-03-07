<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 2</title>
    </head>
    <body>
        <?php

            require_once 'aula4.php';

            $c1 = new Caneta("BIC", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Verde", 0.7);

            
            print_r($c1);
            print_r($c2);

        ?>
    </body>
</html>