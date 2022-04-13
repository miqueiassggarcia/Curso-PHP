<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["num"])?$_GET["num"]:0;
            if($num==0){
                echo "Clique em voltar e digite um valor<br>";
            }else{
            $tipo = $_GET["oper"]??" ";
            switch($tipo){
                case "dobro" : $res = $num * 2;
                echo "<h2>$tipo de $num é igual a $res</h2>";
                break;
                case "cubo" : $res = pow($num,3);
                echo "<h2>$tipo de $num é igual a $res</h2>";
                break;
                case "raiz" : $res = sqrt($num);
                echo "<h2>$tipo de $num é igual a $res</h2>";
                break;
                default: echo "Você não inseriu o tipo de cálculo<br>";
            }
            }
        ?>
        <a href="calculadora.html">Voltar</a>
    </div>
</body>
</html>