<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções Aritméticos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php
    $n1= $_GET["x"];
    $n2= $_GET["y"];
    echo "<h2>Valores recebidos: $n1 é $n2</h2>";
    echo "O valor absoluto de $n2 é ". abs($n2);
    echo "<br>O valor de $n1<sup>$n2</sup> é ". pow($n1,$n2);
    echo "<br>A raiz de $n2 é ". sqrt($n2);
    echo "<br>O valor arrendodado de $n2 é ". round($n2);
    echo "<br>A parte inteira de $n2 é ". intval($n2);
    echo "<br>O valor de $n2 em moeda é ". number_format($n2,2,",",".");
    ?>
    </div>
</body>
</html>