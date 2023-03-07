<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <pre>
        <h1>Sobrecarga</h1>
        <?php
            require_once 'Animal.php';
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';


            $c = new Cachorro();
            $c->emitirSom();
            $l= new Lobo();
            $l->emitirSom();


            $c->reagirDono(false);
            $c->reagirFrase("ola");
            $c->reagirFrase("serumaninho");
            $c->reagirHora(10, 30);
            $c->reagirIdadePeso(14,7);


        ?>
        </pre>
    </body>
</html>