<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body>
    <header>
    <h1>POO PHP</h1>
    </header>
    <div>
    <pre>
    <?php
        require_once "video.php";
        require_once "usuario.php";
        require_once "visualizacao.php";
        $v=array(new Video("Aula 1 de PHP"),
                 new Video("Aula 3 de PHP"),
                 new Video("Aula 5 de PHP"),
                 new Video("Aula 1 de POO de PHP"),
                 new Video("Aula 3 de POO de PHP"));
        $v[0]->like();
        $v[0]->play();
        $v[0]->pause();
        //var_dump($v);
        $u=new Usuario("Marcos",17,"M","Descedor de morro");
        //var_dump($u);
        $vi[1]=new Visualizacao($u,$v[0]);
        $vi[0]=new Visualizacao($u,$v[2]);
        $vi[1]->avaliar();
        $vi[0]->avaliarPorc(85);
        print_r($vi);
    ?>
    </pre>
    </div>
</body>
</html>