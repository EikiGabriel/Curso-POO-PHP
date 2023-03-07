<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <pre>
        <h1>Heranças e Polimorfismo</h1>
        <?php
            require_once 'Mamiferos.php';
            require_once 'Aves.php';
            require_once 'Peixe.php';
            require_once 'Reptil.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Tartaruga.php';
            require_once 'Cobra.php';
            require_once 'GoldFish.php';
            require_once 'Arara.php';
            
            

            
            
            $m = new Mamiferos();
            $a = new Aves();
            $r = new Reptil();
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();


            $m->set_peso(33.5);
            $m->locomover();
            $a->locomover();
            $k->locomover();






        ?>
        </pre>
    </body>
</html>