<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strlen</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $txt = "Miquéias Garcia";
            //sintaxe padrão strlen($txt);
            $str = mb_strlen($txt,"UTF-8");
            echo $str;     
        ?>
    </div>
</body>
<!-- cuidado com as funções de manipulação de strings quando forem tratadas palavras da língua portuguesa com ACENTUAÇÃO.
Exemplo: 
strlen("mãe") retorna 4
mb_strlen("mãe","UTF-8") retorna 3 (que é o esperado)-->
</html>