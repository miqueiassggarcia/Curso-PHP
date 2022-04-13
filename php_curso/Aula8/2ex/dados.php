<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seus Dados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
            $nome= isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
            $nas= isset($_GET["nasc"])?$_GET["nasc"]:0;
            $sexo= isset($_GET["sexo"])?$_GET["sexo"]:"[Sem sexo]";
            $idade=0;
            if($nas>0){
                $idade= date("Y") - $nas;
            }
            echo "$nome nasceu em $nas é do sexo $sexo e tem $idade anos"
        ?>
        <h3><a href="dadospessoais.html">Voltar</a></h3>
    </div>
</body>
</html>