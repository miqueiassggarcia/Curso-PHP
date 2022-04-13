<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabúada</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <form action="tabua.php" method="get">
            <select name="num">
                <?php
                    for($c=1;$c<=10;$c++){
                        echo "<option value='$c'>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabúada">
        </form>
    </div>
</body>
</html>