<?php
    
    $id_book = $_POST['id_book'];
    $tittle = $_POST['tittle'];
    $author = $_POST['author'];
    $release_year = $_POST['release_year'];
    $number_pages = $_POST['number_pages'];
    $genre = $_POST['genre'];
    $parental_rating = $_POST['parental_rating'];

    include("../database/config.php");
	
	$query = "UPDATE `db_books`.`book` 
            SET `TITLE`='$tittle', `AUTHOR`='$author', `RELEASE_YEAR`='$release_year', `NUMBER_PAGES`='$number_pages', `GENRE`='$genre', `PARENTAL_RATING`='$parental_rating' 
            WHERE `ID_BOOK`='$id_book';
    ";
	
	if ($connection->query($query) === TRUE) {
        echo "Registro alterado com sucesso";
        header("Refresh:2; url=../frontend/index.php");
	}
	else {
		echo "Erro: " . $connection->error;
	}
	
	$connection->close();

?>