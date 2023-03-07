<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Controle Remoto</h1>
        <?php
            require_once 'aula6.php';
           $c = new ControleRemoto();
           $c->ligar();
           $c->abrirMenu();

        ?>
    </body>
</html>