<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soma de números</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function soma(){
                $p=func_get_args();
                $tot=func_num_args();
                $s=0;
                for($c=0;$c<$tot;$c++){
                    $s+=$p[$c];
                }
                return $s;
            }
            $res=soma(1,2,3,4,5,6,7,8,9);
            echo "SOMA = $res";
        ?>
    </div>
</body>
</html>