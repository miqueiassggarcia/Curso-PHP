<!DOCTYPE html>
<html lang="pt-BR">
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
                require_once "classeFuncionario.php";
                require_once "classeAluno.php";
                require_once "classeProfessor.php";
                
                $p1=new Pessoa("Maria",16,"F");
                $p2=new Aluno("Pedro",15,"M");
                $p3=new Professor("Cláudio",30,"M");
                $p4=new Funcionario("Fabiola",25,"F");

                $p2->cancelarMatr();
                $p2->setCurso("Informática");
                $p3->setSalario(2500.80);
                $p4->setSetor("Estoque");
                $p4->mudarTrabalhando();
                $p4->mudarTrabalhando();
                var_dump($p1,$p2,$p3,$p4);
            ?>
        </pre>
    </div>
</body>
</html>