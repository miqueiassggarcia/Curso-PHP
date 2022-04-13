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
    //Adicionar as notas pela URL/Ex:?n1=3&n2=9
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];
        $m=($nota1+$nota2+$nota3+$nota4)/4;
        $res= ($m>=7)?"APROVADO":"REPROVADO";
        echo "<h1>Valores: $nota1, $nota2, $nota3, $nota4</h1>";
        echo "Sua média foi de $m";
        echo "<br>Você foi $res";
    ?>
    </div>
</body>
</html>