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
            $num = 1000;
            for ($i=2; $i <= $num ; $i++) {
                $quant=0;
                for ($c=1; $c<=$i ; $c++) { 
                    $val=$i%$c;
                    if($val==0){
                        $quant++;
                    }
                }
                if($quant<=2){
                    echo $i.",<br>";
                }
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>