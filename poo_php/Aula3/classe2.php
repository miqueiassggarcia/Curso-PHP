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
		require_once 'Caneta2.php';
		$c1 = new Caneta;
		$c1->modelo = 'BIC Cristal';
		$c1->cor = 'Azul';
		//$c1->ponta = '0.5';
		//$c1->carga = '99';
		$c1->tampar();
		print_r($c1);
		$c1->rabiscar();
	?>
	</pre>
	</div>
</body>
</html>

