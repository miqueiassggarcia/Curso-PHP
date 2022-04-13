<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetores</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <pre>
            <?php
                $cad = array("nome"=>"Ana","idade"=>20,"peso"=>60.8);
                print_r($cad);
                foreach($cad as $key => $cont) {
                    echo"O campo $key possiu o valor $cont <br>";
                }
            ?>
        </pre>
    </div>
</body>
</html>