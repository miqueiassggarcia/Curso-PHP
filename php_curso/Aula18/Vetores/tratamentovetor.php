<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tratamento vetor php</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
    <style>
        div {
            height:2000px;
        }
    </style>
</head>
<body>
    <div>
        <pre>
        <?php
            $vet = array(2, 5, 7, 8, 9);
            print_r($vet);
            echo str_repeat("_",64)."<br><br>";
            //quantidade de elementos
            echo count($vet)."<br>";
            echo str_repeat("_",64)."<br>";
            //adição e eliminação no final
            echo array_pop($vet)."<br>";
            array_push($vet, 2);
            print_r($vet);
            echo str_repeat("_",64)."<br>";
            //adição e eliminação no começo
            echo array_shift($vet),"<br>";
            array_unshift($vet,18);
            print_r($vet);
            echo str_repeat("_",64)."<br>";
            //ordenação crescente e decrescente
            sort($vet);
            print_r($vet);//crescente
            rsort($vet);
            print_r($vet);//decrescente
            echo str_repeat("_",64)."<br>";
            //ordenação mantendo indices
            $vet2 = array("a"=>2,"d"=>10,"p"=>8,"o"=>9);
            print_r($vet2);
            asort($vet2);
            print_r($vet2);//crescente
            arsort($vet2);
            print_r($vet2);
            echo str_repeat("_",64)."<br>";
            //ordenação por valores de chaves
            ksort($vet2);
            print_r($vet2);//crescente
            krsort($vet2);
            print_r($vet2);//decrescente
        ?>
        </pre>
    </div>  
</body>
</html>