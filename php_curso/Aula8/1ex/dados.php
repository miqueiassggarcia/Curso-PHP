<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raiz</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "A raiz quadrada de $valor é igual a ". number_format($rq,2,",",".");
        ?>
        <br><a href="raiz.html">Voltar</a>
    </div>
</body>
</html>