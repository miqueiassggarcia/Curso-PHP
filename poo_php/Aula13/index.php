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
        require_once "cachorro.php";
        require_once "animal.php";
        require_once "mamifero.php";
        require_once "lobo.php";
        $c=new Cachorro;
        $c->setPeso(10);
        $c->setIdade(4);
        $c->setMembros(4);
        $c->setcorPelo("Marrom");
        $c->emitirSom();
        $c->reagirFrase("what");
        $c->reagirHora(12);
        $c->reagirDono(false);
        $c->reagirIdadePeso(6,20);
        var_dump($c);
    ?>
    </pre>
    </div>
</body>
</html>