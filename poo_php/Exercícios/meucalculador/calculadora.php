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
    <div>
    <?php
        $number = $_GET["text"] ?? 0;
        $tipo = $_GET["tipo"] ?? 0;
        require_once "calculador.php";
        $cal=new Calculador;
        if($tipo=="decimalbinario"){
            $cal->calcularDecimalBinario($number);echo"<br>";
        }
        if($tipo=="binariodecimal"){
            $cal->calcularBinarioDecimal($number);echo "<br>";
        }
        if($tipo=="decimalhexade"){
            $cal->calcularDecimalHexadecimal($number);echo "<br>";
        }
        if($tipo=="hexadedecimal"){
            $cal->calcularHexadecimalDecimal($number);echo "<br>";
        }
        if($tipo=="decimaloctal"){
            $cal->calcularDecimalOctal($number);echo "<br>";
        }
        if($tipo=="octaldecimal"){
            $cal->calcularOctalDecimal($number);
        }
    ?>
    <a href="http://localhost/poo_php/Exerc%C3%ADcios/meucalculador/index.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>