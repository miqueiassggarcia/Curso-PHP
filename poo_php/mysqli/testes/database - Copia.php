<?php
	// Executa Querys
	function DBExecute($query){
		$link=DBConnect();
		$result=mysqli_query($link,$query) or die(mysqli_error($link));
		return $result;
		DBClose($link);
	}	
?>