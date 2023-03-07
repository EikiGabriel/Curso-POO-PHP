<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <pre>
        <h1>Heranças e Polimorfismo</h1>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Visitante.php';
            require_once 'Bolsista.php';

            $vi = new Visitante();
            $vi->set_nome("Eiki");
            $vi->set_idade(16);
            $vi->set_sexo("M");

            $a = new Aluno();
            $a->set_nome("zabuza");
            $a->set_idade(56);
            $a->set_sexo("M");
            $a->set_matricula(1234);
            $a->set_curso("letras KNH");
            $a->pagarMensalidade();
            

            $b = new Bolsista();
            $b->set_nome("babalu");
            $b->set_idade(22);
            $b->set_sexo("F");
            $b->set_matricula(4444);
            $b->set_curso("ADM");
            $b->set_bolsa(12.5);
            $b->pagarMensalidade();


            print_r($vi);
            print_r($a);
            print_r($b);



        ?>
        </pre>
    </body>
</html>