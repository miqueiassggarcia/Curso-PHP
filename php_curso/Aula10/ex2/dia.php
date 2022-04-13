<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia da semana</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $dia = isset($_GET["ds"])?$_GET["ds"]:0;
            switch($dia){               
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                echo "Dia de estudar";
                break;
                case 7:
                case 1:
                echo "Dia de descansar";
                break;
                default:
                echo "Dia inválido";
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>