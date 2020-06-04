<?php
	
	include("../database/database.php");
	
	$database = new Database();
	
	$id = $_GET["id"];
		
	if( $database->deleteBook($id)) {
		header('Location: ../frontend/index.php');
	}else{
		echo "<h2>Erro ao excluir</h2>";
		header("Refresh:1; url=../frontend/index.php");
	}

?>