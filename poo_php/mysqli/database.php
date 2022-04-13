<?php
	// Deleta Registros
	function DBDelete($table, $where = null){
		$table=DB_PREFIX."_".$table;
		$where=($where) ? " WHERE {$where}" : null;

		$query = "DELETE FROM {$table}{$where}";
		var_dump($query);
		return DBExecute($query);
	}
	// Atualiza Registros	
	function DBUpDate($table, array $data, $where = null, $insertID = false){
		foreach ($data as $key => $value) {
			$fields[] = "{$key} = '{$value}'";
		}
		$fields= implode(", ", $fields);
		$table=DB_PREFIX."_".$table;
		$where = ($where) ? " WHERE {$where}" : null;
		$query="UPDATE {$table} set {$fields}{$where}";
		return DBExecute($query, $insertID);
	}
	// ler Registros
	function DBRead($table,$params = null,$fields = '*'){
		$table=DB_PREFIX."_".$table;
		// coloca o espaço só se tiver dados
		$params = ($params) ? " {$params}" : null;

		$query="SELECT {$fields} FROM {$table}{$params}";
		$result= DBExecute($query);
		
		if(!mysqli_num_rows($result)){
			return false;
		}else{
			while ($res = mysqli_fetch_assoc($result)) {
				$data[]=$res;
			}
		}
		return $data;
	}
	// Cria Querys
	function DBCreate($table, array $data, $insertID = false){
		$table=DB_PREFIX."_".$table;
		$data=DBEscape($data);

		$fields=implode(", ",array_keys($data));
		$values="'".implode("', '",$data)."'";

		$query="INSERT INTO $table ($fields) VALUES ($values)";
		
		return DBExecute($query, $insertID);
	}
	// Executa Querys
	function DBExecute($query, $insertID = false){
		$link=DBConnect();
		$result=mysqli_query($link,$query) or die(mysqli_error($link));
		if ($insertID) {
			$result = mysqli_insert_id($link);
		}
		return $result;
		DBClose($link);
	}	
?>