<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chr e ord</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $letra = chr(67);
            echo "A letra de código 67 é o $letra<br>";
            $cod = ord("C");
            echo "O código da letra 'C' é o $cod";
        ?>
    </div>
</body>
</html>