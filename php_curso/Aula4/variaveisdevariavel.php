<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Variável de variável</title>
</head>
<body>
    <div>
    <?php
     $x = 1;
     $$x = 2;
     echo "O conteúdo da variável 'X' é $x";
     echo "<br>A variável $x criada recebeu o valor {$$x}";
    ?>
    </div>
</body>
</html>