<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seu Estado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $est = $_GET["est"];
            switch($est){
                case "ne":
                $reg="Nordeste";
                break;
                case "no":
                $reg="Norte";
                break;
                case "sud":
                $reg="Suldeste";
                break;
                case "sul":
                $reg="Sul";
                break;
                case "co":
                $reg="Centro-Oeste";
                break;
            }
            echo "<p>Você mora na região $reg</p>";
        ?>
        <br><a href="javascript:history.go(-1)" id="botao">Voltar</a>
    </div>
</body>
</html>