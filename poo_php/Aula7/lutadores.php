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
            require_once "Classelutador.php";
            $l=[new Lutador("Dom minik","França",31,1.75,68.9,11,3,1),
                new Lutador("putscript","Brasil",29,1.68,57.8,14,2,3),
                new Lutador("Snapshadow","EUA",35,1.65,80.9,12,2,1),
                new Lutador("Dead Code","Austrália",28,1.93,100.9,13,0,2),
                new Lutador("Lunximburgo","Canadá",30,1.70,90.8,6,5,0),
                new Lutador("Angularte","Alemanha",40,2.10,120,28,4,2)];
            require_once "Luta.php";
            $UFC01 = new Luta;
            $UFC01->marcarLuta($l[3],$l[5]);
            $UFC01->lutar();
            var_dump($UFC01);
        ?>
        </pre>
    </div>
</body>
</html>