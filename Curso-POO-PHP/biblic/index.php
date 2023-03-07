<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <pre>
        <h1>Livros</h1>
        <?php
            require_once 'Livro.php';
            require_once 'Pessoa.php';

            

            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");
            
            $s[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
            $s[1] = new Livro("POO", "Maria de Souza", 300, $p[1]);
            $s[2] = new Livro("PHP AVANÇADO", "Ana Paula", 800, $p[1]);

            $s[0]->abrir();
            $s[0]->folhear(46);

            $s[1]->abrir();
            $s[1]->folhear(98);
            $s[1]->avancarPag();
            $s[1]->avancarPag();
            $s[1]->avancarPag();
            $s[1]->avancarPag();
            $s[1]->avancarPag();
            
            print_r($s[0]);
            print_r($s[1]);
            print_r($s[2]);

            $s[0]->detalhes();
        ?>
        </pre>
    </body>
</html>