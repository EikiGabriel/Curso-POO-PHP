<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <pre>
        <h1>Livros</h1>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->set_Nome("Pedro");
            $p2->set_Nome("Maria");
            $p3->set_Nome("Claudia");
            $p4->set_Nome("Fabiana");


            $p1->set_sexo("M");
            $p4->set_sexo("F");

            $p2->set_curso("Agronomia USP");
            $p3->set_salario(2500.75);  
            $p4->set_setor("RH");
            
    
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

        ?>
        </pre>
    </body>
</html>