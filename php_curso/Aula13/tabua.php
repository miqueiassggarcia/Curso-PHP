<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabúada</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $num = $_GET["num"];
            echo "<h1>Tabúada do $num</h1>";
            for($c=1;$c<=10;$c++){
                $res=$c*$num;
                echo "$num x $c = $res<br>";
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>