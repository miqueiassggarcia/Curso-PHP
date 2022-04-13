<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wordwrap</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $txt = "PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.";
            $word = wordwrap($txt, 60,"<br>\n",false);
            echo $word;
        ?>
    </div>
</body>
</html>