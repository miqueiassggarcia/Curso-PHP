<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incremento</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é ". --$atual;
        //echo "<br>O ano atual é $atual e o ano anterior é ". $atual--."  ".$atual;
    ?>
    </div>
</body>
</html>