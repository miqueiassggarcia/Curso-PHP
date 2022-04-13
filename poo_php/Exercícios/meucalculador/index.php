<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body>
    <div>
    <?php
        require_once "calculador.php";
        $cal=new Calculador;
        $cal->calcularDecimalBinario(255);echo"<br>";
        $cal->calcularBinarioDecimal(11111111);echo "<br>";
        $cal->calcularDecimalHexadecimal(255);echo "<br>";
        $cal->calcularHexadecimalDecimal("FF");echo "<br>";
        $cal->calcularDecimalOctal(255);echo "<br>";
        $cal->calcularOctalDecimal(377);
    ?>
    </div>
</body>
</html>