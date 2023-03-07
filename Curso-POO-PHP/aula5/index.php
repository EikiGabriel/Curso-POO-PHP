<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            $p1->abrirConta("cc");
            $p1->set_dono("Jubileu");
            $p1->set_numConta(1111);

            $p2->abrirConta("cp");
            $p2->set_dono("Creusa");
            $p2->set_numConta(2222);

            $p1->Depositar(300);
            $p2->Depositar(500);
            $p2->Sacar(100);

            $p1->PagarMensalidade();
            $p2->PagarMensalidade();

            $p1->Sacar(338);
            $p2->Sacar(530);

            $p1->fecharConta(1111, "cc", true);
            $p2->fecharConta(2222, "cp", true);

            print_r($p1);
            print_r($p2);

        ?>
    </body>
</html>