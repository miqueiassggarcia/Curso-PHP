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
        require_once "mamifero.php";
        require_once "ave.php";
        require_once "peixe.php";
        require_once "reptil.php";
        require_once "goldfish.php";
        require_once "arara.php";
        require_once "cobra.php";
        require_once "cachorro.php";
        require_once "canguru.php";
        require_once "tartaruga.php";


        $m=new Mamifero;
        $ave=new Ave;
        $r=new Reptil;
        $p=new Peixe;
        $g=new Goldfish;
        $ara=new Arara;
        $cob=new Cobra;
        $cac=new Cachorro;
        $can=new Canguru;
        $t=new Tartaruga;

        $t->setPeso(33.5);
        $t->setIdade(3);
        $t->setMembros(4);
        $t->setcorEscama("Marrom");
        $cac->emitirSom();
        $t->locomover();
        var_dump($t);
    ?>
    </pre>
    </div>
</body>
</html>