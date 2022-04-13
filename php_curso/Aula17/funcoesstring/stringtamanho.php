<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formatação de tamanho</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $frase="miqueias garcia de lucena";
            print("<h2>Original: $frase</h2>");
            print(strtolower($frase));
            print("<br>" . strtoupper($frase));
            print("<br>" . ucfirst($frase));
            print("<br>" . ucwords($frase));
        ?>
    </div>
</body>
</html>