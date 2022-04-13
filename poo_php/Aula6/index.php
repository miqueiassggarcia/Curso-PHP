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
    <h1>Projeto controle remoto</h1>;
    <div>
        <pre>
            <?php
                require_once "Controle.php";
                $c= new ControleRemoto;
                $c->ligar();
                $c->menosVolume();
                $c->menosVolume();
                $c->ligarMudo();
                $c->desligarMudo();
                $c->maisVolume();
                $c->play();
                $c->pause();
                $c->abrirMenu();
            ?>
        </pre>
    </div>
</body>
</html>