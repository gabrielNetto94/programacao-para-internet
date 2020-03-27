<?php

    header('Access-Control-Allow-Origin: *');

	$name = $_POST['name'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$course = $_POST['course'];
	$suggestion = $_POST['suggestion'];
	$a = '';

	$flag = false;
	 if (isset($_POST['checkbox'])){
	 	$checkbox = $_POST['checkbox'];
	 	$flag = true;
	 }


	echo "Nome: ".$name."\n";
	echo "Data: ".$date."\n";
	echo "Itens checkbox: "; 
	if($flag){
		showCheckBox($checkbox);
	}
	echo "\nGênero: ".$gender."\n";
	echo "Curso: ".$course."\n";
	echo "Sugestão: ".$suggestion;



	function showCheckBox($checkItens){
		foreach ($checkItens as &$item) {
			echo $item."\t";
		}

	}
	/*if(isset($_POST['name']) && isset($_POST['date']) ){
        
	}
	
	else{
		echo "Nenhum parâmetro passado, nem por GET e nem por POST";
	}*/
?>