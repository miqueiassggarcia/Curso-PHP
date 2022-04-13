<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetores</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
    <style>
        div{
            height: 800px;
        }
    </style>
</head>
<body>
    <div>
        <pre>
            <?php
                $matriz = array(array(2,4,6,7),array(6,4,5,3),array(8,0,3,12));
                $matriz[2][2]=$matriz[0][3];
                $matriz[0][0]=$matriz[2][3];
                print_r($matriz);
            ?>
        </pre>
    </div>
</body>
</html>