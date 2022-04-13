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
            require_once "visitante.php";
            require_once "aluno.php";
            require_once "bolsista.php";
            $v = new Aluno("Maria",12,"F",1111,"Programador");
            var_dump($v);
            $v->pagarMensal();
            $b=new Bolsista("Pedro",20,"M",2020,"Veterinário");
            $b->setBolsa(12.5);
            $b->renovarBolsa();
            $b->pagarMensal();
            var_dump($b);
        ?>
    </pre>
    </div>
</body>
</html>