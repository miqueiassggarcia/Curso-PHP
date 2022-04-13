<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerador de tabúada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $n = $_GET["num"];
            echo "<h1>Tabúada do $n</h1>";
            $c = 0;
            do{
                $res = $n * $c;
                echo "$n x $c = $res<br>";
                $c++;
            }while($c<=10);
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>