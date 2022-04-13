<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php
    $n1= $_GET["a"];
    $n2= $_GET["b"];
    $m = ($n1 + $n2)/2;
    echo "<h2> Valores recebidos: $n1 e $n2 </h2>";
    echo "A soma entre $n1 e $n2 é igual a ", ($n1+$n2) ,"<br><br>";
    echo "A subtração entre $n1 e $n2 é igual a ". ($n1-$n2) ."<br><br>";
    echo "A multiplicação entre $n1 e $n2 é igual a ". ($n1*$n2) ."<br><br>";
    echo "A divisão entre $n1 e $n2 é igual a ". ($n1/$n2) ."<br><br>";
    echo "O resto da divisão entre $n1 e $n2 é igual a ". ($n1%$n2) ."<br><br>";
    echo "A média entre $n1 e $n2 é igual a $m";
    ?>
    </div>
</body>
</html>