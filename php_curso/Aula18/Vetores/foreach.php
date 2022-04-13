<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetores</title>
    <link rel="stylesheet" href="../../_css/estilo.css">
    <style>
        td {
            padding:5px;
        }
    </style>
</head>
<body>
    <div>
        <table border="1">
            <tr>
            <?php
                $c = range(2,10,2);
                foreach($c as $v) {
                    echo "<td>$v</td>";
                }
            ?>
            </tr>
        </table>
    </div>
</body>
</html>