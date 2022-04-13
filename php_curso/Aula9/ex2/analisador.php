<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificador</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $ano=isset($_GET["ano"])?$_GET["ano"]:0;
            if($ano==0){
                echo "<a href='voto.html'>Clique aqui</a> para voltar e digite a sua data de nascimento";
            }else{
                $idade=date("Y")-$ano;
                echo "Você tem $idade anos";
                if($idade<16){
                    echo "<h2>Você não pode votar</h2>";
                }else if($idade<=18||$idade>65){
                    echo "<h2>Você pode votar(voto não obrigatório)</h2>";
                }else{
                    echo "<h2>Voto Obrigatório</h2>";
                }
                echo "<p><a href='voto.html'>Voltar</a></p>";
            }
        ?>
    </div>
</body>
</html>