<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>implode</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $v[0]="Curso";
            $v[1]="em";
            $v[2]="Vídeo";
            $implo = implode("-",$v);
            print($implo);
            print("<br>");
            $implo = join(" ",$v);
            print($implo);
        ?>
    </div>
</body>
</html>