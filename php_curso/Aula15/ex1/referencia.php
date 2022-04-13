<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Referência</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function dobro1($x){
                $x*=2;
                echo "O valor de X1 é $x<br>";
            }
            $a=4;
            dobro1($a);
            echo "O valor de A1 é $a<br>";
            function dobro2(&$x){
                $x*=2;
                echo "O valor de X2 é $x<br>";
            }
            $a=4;
            dobro2($a);
            echo "O valor de A2 é $a";
        ?>
    </div>
</body>
</html>