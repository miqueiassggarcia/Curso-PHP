<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div>
    <pre>
    <?php
        require_once "classePessoa.php";
        require_once "classeLivro.php";

        $p[0]=new Pessoa("Paula",15,"F");
        $p[1]=new Pessoa("Karla",30,"F");

        $l[0]=new Livro("PHP Básico","José da Silva",300,$p[0]);
        $l[1]=new Livro("POO com PHP","Maria de Souza",500,$p[0]);
        $l[2]=new Livro("PHP avançado","Ana Paula",800,$p[1]);

        $l[0]->folhear(30);
        $l[0]->avancarPag();
        $l[0]->voltarPag();
        $l[1]->folhear(600);
        $l[0]->detalhes();
        $l[1]->detalhes();
        $l[2]->detalhes();
    ?>
    </div>
    </pre>
</body>
</html>