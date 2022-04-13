<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatorial</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["val"])?$_GET["val"]:1;
            echo "<h1>Calculando fatorial de $num:</h1>";
            $c = $num;
            $fat = 1;
            do{
                $fat*=$c;
                $c--;
            }while($c>1);
            echo "<br>$num! = $fat";
        ?>
       <br><br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>