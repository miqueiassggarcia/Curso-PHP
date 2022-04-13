<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $l=1;
            while($l<=5){
                $v = "num".$l;
                $url = "n".$l;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $l++;
            }
            $l=1;
            while($l<=5){
                $v = "num".$l;
                echo "Valor $l : ". $$v ."<br>";
                $l++;
            }
        ?>
    </div>
</body>
</html>