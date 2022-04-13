<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formatação ptintf</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
    <style>
        div{
            height: 1130px;
        }
    </style>
</head>
<body>
    <div>
        <pre>
        <?php
            $v1[0]=2;
            $v1[1]=6;
            $v1[2]=9;
            $v1[3]=1;
            print_r($v1);
            echo"<br><br>";
            $v2 = array (1,2.4,5,6,9,8,20);
            print_r($v2);
            echo"<br><br>";
            var_export($v2);
            echo"<br><br>";
            var_dump($v2);
        ?>
        </pre>
    </div>
</body>
</html>