<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    // Uma variável está diretamente ligada a outra, assim, se uma for alterada a outra também será(para isso usa-se'&')
     $a = 3;
     $b = &$a;
     $b += 4;
     echo "A variável 'A' vale $a";
     echo "<br>A variável 'B' vale $b";
    ?>
    </div>
</body>
</html>