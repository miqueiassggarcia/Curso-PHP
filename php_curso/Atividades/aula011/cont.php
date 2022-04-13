<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $ini = isset($_GET["ini"])?$_GET["ini"]:0;
            $fin = isset($_GET["fin"])?$_GET["fin"]:0;
            $pas = isset($_GET["passo"])?$_GET["passo"]:0;
            if($ini<$fin){
                while($ini<=$fin){
                    echo "$ini ";
                    $ini+=$pas;
                }
            }else{
                while($ini>=$fin){
                    echo "$ini ";
                    $ini-=$pas;
                }
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>