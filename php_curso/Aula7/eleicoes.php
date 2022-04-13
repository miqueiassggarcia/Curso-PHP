<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eleições</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $ano = $_GET["an"];
        $idade = 2019 - $ano;
        echo "Quem nasceu em $ano tem $idade anos de idade";
        if($idade>120or$idade==0){
            echo "<p>Sua idade está fora da média possível</p>";
        }else{
        echo "<br>Com essa idade seu voto é ",($idade>17&&$idade<65?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO");
        }
    ?>
    </div>
</body>
</html>