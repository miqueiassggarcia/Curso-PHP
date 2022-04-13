<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculador de preço</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é ", number_format($preco,2,',','.');
        $precoa = $preco+$preco*10/100;
        echo "<br>O novo preço com 10% de aumento será R$ ". number_format($precoa,2,",",".");
        $precod = $preco-$preco*10/100;
        echo "<br>O preço com 10% de desconto será R$ ". number_format($precod,2,",",".");
    ?>
    </div>
</body>
</html>