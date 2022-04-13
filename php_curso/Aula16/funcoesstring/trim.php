<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trim</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $txt = "   José Freitas   ";
            echo strlen($txt)."<br>";
            $trim = trim($txt);
            echo strlen($trim);   
        ?>
    </div>
</body>
</html>