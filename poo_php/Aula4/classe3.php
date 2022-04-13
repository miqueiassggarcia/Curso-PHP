<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Primeira Classe</title>
	<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
	<h1>Poo php</h1>
	<div>
	<pre>
	<?php
		require_once 'Caneta3.php';
        $c1 = new Caneta('BIC','Azul',0.5);
        print_r($c1);
        print "Eu tenho uma caneta {$c1->getModelo()} {$c1->getCor()} de ponta {$c1->getPonta()}.";
	?>
	</pre>
	</div>
</body>
</html>