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
		require_once 'Caneta.php';
		$c1 = new Caneta;
		$c1->cor = "Azul";
		$c1->ponta = "0.5";
		$c1->tampada = false;
		$c1->tampar();
		$c1->rabiscar();

		print_r($c1);

		$c2 = new Caneta;
		$c2->cor = 'Verde';		
		$c2->ponta = '0.5';
		$c2->carga = '80';
		$c2->tampada = true;
		print '<br>';
		print_r($c2);
	?>
	</pre>
	</div>
</body>
</html>