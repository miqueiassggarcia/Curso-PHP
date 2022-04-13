<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Poo php</h1>
    <div>
        <pre>
        <?php
            require_once "ClasseBanco.php";
            $numConta= $_GET["num"] ?? 0;
            $tipo = $_GET["tipo"];
            $status= $_GET["abroufec"];
            $nome= $_GET["nome"] ?? "Não definido";
            $$numConta=new ContaBanco;
            $$numConta->setnumConta($numConta);
            $$numConta->setDono($nome);
            if($status){
                $$numConta->abrirConta($tipo);
            }else{
                $$numConta->setTipo($tipo);
            }
            var_dump($$numConta);
        ?>
        </pre>
    </div>
</body>
</html>