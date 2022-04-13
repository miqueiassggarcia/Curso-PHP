<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Números primos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["num"])?$_GET["num"]:0;
            $ndiv = 0;
            echo "<h2>Analisando o número $num...</h2>";
            echo "<p>Valores múltiplos:";
            for($c=1;$c<=$num;$c++){
                if($num%$c==0){
                    if($num==$c){
                        $ndiv++;
                    echo " $c.</p>";   
                    }else{
                        $ndiv++;
                        echo " $c,";
                    }
                }
            }
            echo "<p>Total de múltiplos: $ndiv.</p>";
            if($ndiv==2){
                echo "<h3>Resultado: $num é primo!</h3>";
            }else{
                echo "<h3>Resultado: $num não é primo!</h3>";
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>