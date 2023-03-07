<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 2</title>
    </head>
    <body>
        <?php

            require_once 'aula3.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";


            print_r($c1);

        ?>
    </body>
</html>