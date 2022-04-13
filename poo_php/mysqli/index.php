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
        // 2ª aula
        // conexão
        $link=DBConnect();
        DBClose($link);
        // // escape var
        $nome="Miquéias";
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
        $query="INSERT INTO clientes() VALUES ($nome)";
        var_dump($query);
        var_dump(DBExecute($query));
        // 3ª aula
        $cliente = array(
            "nome"  => 'Luana Vinho',
            "email" => 'Luana@gmail.com',
            "idade" => 23,
            "status"=> 1
        );
        $grava=DBCreate('clientes',$cliente, true);
        var_dump($grava);
         if ($grava) {
             echo "OK";
         } else {
             echo ":/";
         }
        // 4ª aula
        $clientes = DBRead('clientes',"WHERE status = 1",'*');
        var_dump($clientes);
        // 6ª aula
        $cliente= array(
            'status' => 1,
            'idade'  => 19
        );
        var_dump(DBUpDate('clientes', $cliente, "id = 2"));
        // 7ª aula
        $dropcliente = DBDelete('clientes', "id = 3");
        if ($dropcliente) {
            echo "OK";
        } else {
            echo "ERROR";
        }
    ?>
</pre>
</body>
</html>