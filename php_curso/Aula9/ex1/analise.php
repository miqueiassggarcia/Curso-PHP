<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avaliador</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $nasc=isset($_GET["ano"])?$_GET["ano"]:0;
            if($nasc==0){
                echo "Ano não especificado. Clique em voltar e adicione o seu ano de nascimento";
            }else{
                $idade=date("Y")-$nasc;
                    echo "Você nasceu em $nasc e tem $idade anos de idade";
                if($idade>=18){
                    echo "<br>Você está apto a votar e tirar carta de motorista";
                }else{
                    if($idade>=16){
                        echo "<br>Você está apto a votar(mas o voto não é obrigatório) e não pode tirar carteira de motorista";
                    }else{
                        echo "<br>Você não está apto a votar e tirar carta de motorista";
                    }
                }
            }
        ?>
        <br><a href="avaliador.html">Voltar</a>
    </div>
</body>
</html>