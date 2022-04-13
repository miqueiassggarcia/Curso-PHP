<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formatação ptintf</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $p = 4.50;
            $pr = "Leite";
            echo "O $pr está custando R$ ". number_format($p,2,",",".");
            printf("<br>O %s está custando R$ %.2f",$pr,$p)
        ?>
    </div>
</body>
</html>