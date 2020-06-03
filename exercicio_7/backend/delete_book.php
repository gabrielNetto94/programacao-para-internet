<?php
	//conexão com o banco de dados
    include("../database/config.php");
	
	$id = $_GET["id"];
	
	$query = "DELETE FROM BOOK WHERE ID_BOOK = $id";
	
	if ($connection->query($query) === TRUE) {
		echo "Registro excluído com sucesso";
	}
	else {
		echo "Erro: " . $connection->error;
	}
	
	//fecha a conexão
	$connection->close();

?>