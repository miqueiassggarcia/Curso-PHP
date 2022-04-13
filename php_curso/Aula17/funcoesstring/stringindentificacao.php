<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formatação de tamanho</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $frase="miqueias garcia de lucena";
            print("<h2>Original: $frase</h2>");
            print(strrev($frase));
            print("<br>'de' está localizado na posição " . strpos($frase, "de"));
            print("<br>'DE' está localizado na posição " . stripos($frase, "DE"));
            print("<br>Posição de 'miqueias' é " . substr_count($frase, "miqueias"));
            print("<br>" . substr($frase, 9,16));
            print("<br>" . substr($frase,-6,6));
            $STR=str_pad($frase,40," ",STR_PAD_BOTH);/*RIGHT e LEFT possiveis*/
            print("<br>Seu nome $STR .");
            print("<br>" . str_repeat("-",80));
            print("<br>" . str_replace("garcia","alves",$frase));
        ?>
    </div>
</body>
</html>