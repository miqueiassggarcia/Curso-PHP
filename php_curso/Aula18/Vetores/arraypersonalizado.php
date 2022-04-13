<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetores</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
    <style>
        td {
            padding:5px;
        }
    </style>
</head>
<body>
    <div>
        <pre>
            <?php
                $n = array(1=>"b",5=>5,9=>"oi");
                print_r($n);
                $n[]=90;
                print_r($n);
                unset($n[1]);
                print_r($n);
            ?>
        </pre>
    </div>
</body>
</html>