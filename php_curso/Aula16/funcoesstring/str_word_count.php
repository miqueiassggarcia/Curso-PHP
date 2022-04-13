<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>srt_word_count</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            echo "<h2>Com acento</h2>";
            $txt = "Funções string em php";
            $str = str_word_count($txt,0,"çõ");
            echo $str."<br>";
            $str = str_word_count($txt,1,"çõ");
            print_r($str);
            echo "<br>";
            $str = str_word_count($txt,2,"çõ");
            print_r($str);
            echo "<br><h2>Sem acento</h2>";
            $txt = "Funcoes string em php";
            $str = str_word_count($txt,0);
            echo $str."<br>";
            $str = str_word_count($txt,1);
            print_r($str);
            echo "<br>";
            $str = str_word_count($txt,2);
            print_r($str);
        ?>
    </div>
</body>
<!-- cuidado com as funções de manipulação de strings quando forem tratadas palavras da língua portuguesa com ACENTUAÇÃO.
Exemplo: 
str_word_count("mãe coração abrangência bênçãos",1) devolve um ARRAY com 9 elementos:
"m" "e" "cora" "o" "abrang" "ncia" "b" "n" "os" isso porque os caracteres acentuados são considerados como NÃO SENDO LETRAS.

Para corrigir isso é necessário acrescentar a lista de letras acentuadas a serem considerada como SENDO LETRAS:
str_word_count("mãe coração abrangência bênçãos",1,"çãê") devolve um ARRAY com 4 elementos:
"mãe" "coração" "abrangência" "bênçãos"

para que a função str_word_count sempre funcione sugiro que seja criada uma constante a ser utilizada em todos os projetos/sites com todas as acentuações que utilizamos:

"ÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÇÑÃÕçñãõÄËÏÖÜäëïöüªº"

Alguns dos acentos acima não estão no português mas são encontrados no francês.
Inclui "ª" e "º" pois frequentemente encontro abreviações em cadastro como "Stª" para "Santa" e "Stº" para "Santo" ou "Profª" para "Professora.-->
</html>