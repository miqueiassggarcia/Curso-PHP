<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require "config.php";
        require "connection.php";
        require "database.php";
        // coneção
        $link=DBConnect();
        DBClose($link);
        // escape var
        $nome="'or''=''";
        $nome1=DBEscape($nome);
        var_dump($nome1);
        // escape array
        $dados = array(
            'nome' => "Miquéias 'Garcia'",
            'idade' => 18
        );
        $dadosclear=DBEscape($dados);
        var_dump($dadosclear);
        // inserir dados
        $query="INSERT INTO clientes(nome) VALUES ($nome)";
        var_dump($query);
        var_dump(DBExecute($query));
    ?>
</pre>
</body>
</html>