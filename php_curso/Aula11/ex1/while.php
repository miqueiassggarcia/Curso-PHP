<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <form action="whilem.php" method="get">
        <?php    
        $c=1;
        while($c<=5){    
        echo "Valor $c:<input type='number' name='n$c' max='100' min='0'><br>";
        $c++;
        }
        ?>
        <input type="submit" value="Mostrar">
        </form>
    </div>
</body>
</html>