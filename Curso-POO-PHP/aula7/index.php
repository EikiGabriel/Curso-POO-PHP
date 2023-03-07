<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Lutas</h1>
        <?php

            require_once 'aula7.php';
            require_once 'luta.php';
            $l1 = array();
            $l[0] = new Lutado("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutado("Puscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutado("SnapShadow", "EUA", 35, 1.65, 80.9, 13, 0, 2);
            $l[3] = new Lutado("Dead Code", "Australia", 29, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutado("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutado("Nerdaart", "EUA", 30, 1.81, 105.8, 12, 2, 4);


            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[5],$l[1]);
            $UEC01->Lutar();


        ?>
    </body>
</html>