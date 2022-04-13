<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>operador</title>
</head>
<body>
    <div>
    <?php
        $n1= 5;
        $n2= '5';
        $ig= ($n2==$n1)?"SIM":"NÃO";
        $id= ($n2===$n1)?"SIM":"NÃO";
        echo "A e B são iguais?: $ig";
        echo "<br>A e B são identicos?: $id";
    ?>
    </div>
</body>
</html>