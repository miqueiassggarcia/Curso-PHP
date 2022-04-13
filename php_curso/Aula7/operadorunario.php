<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>operador</title>
</head>
<body>
    <div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "<br>Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "<br>O resultado será $r"
    ?>
    </div>
</body>
</html>