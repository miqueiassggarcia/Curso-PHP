<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $n1 = isset($_GET["nota1"])?$_GET["nota1"]:0;            
            $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
            $n3 = isset($_GET["nota3"])?$_GET["nota3"]:0;
            $n4 = isset($_GET["nota4"])?$_GET["nota4"]:0;
            $media = ($n1+$n2+$n3+$n4)/4;
            if($media<5){
                echo "<h3>Notas: $n1, $n2, $n3, $n4</h3><h3>Média: $media</h3>";
                echo "<h2>REPROVADO</h2>";
            }else if($media<7){
                echo "<h3>Notas: $n1, $n2, $n3, $n4</h3><h3>Média: $media</h3>";
                echo "<h2>RECUPERAÇÃO</h2>";
            }else{
                echo "<h3>Notas: $n1, $n2, $n3, $n4</h3><h3>Média: $media</h3>";
                echo "<h2>APROVADO</h2>";
            }
        ?>
    </div>
</body>
</html>