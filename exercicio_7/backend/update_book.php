<html>

<head>

	<meta charset="UTF-8" />

</head>

<body>

	<h1>Alteração das informações do livro</h1>
    <?php
    
    include("../database/config.php");
	$id = $_GET["id"];
	$query = "SELECT * FROM BOOK WHERE ID_BOOK = $id";
	$result = $connection->query($query);

	if($result->num_rows >0){
		$linha = $result->fetch_assoc();
		?>
		<form action="update_info_book.php" method="POST" />
		<input type="hidden" name="id_book" value="<?php print $linha['ID_BOOK'] ?>"/>
               
        Título: <input type="text" name="tittle" value="<?php print $linha['TITLE']?>" required /><br>
        Autor: <input type="text" name="author" value="<?php print $linha['AUTHOR'] ?>" required /><br>
        Ano de lançamento: <input type="number" name="release_year"  value="<?php print $linha['RELEASE_YEAR'] ?>" required /><br>
        Número de páginas: <input type="number" name="number_pages" value="<?php print $linha['NUMBER_PAGES'] ?>" required/><br>
        Gênero: <input type="text" name="genre" value="<?php print $linha['GENRE'] ?>" required/><br>
        Classificação indicativa: <input type="number" name="parental_rating" value="<?php print $linha['PARENTAL_RATING'] ?>" required/><br>


		<input type="submit" value="Alterar"/>
	
		</form>
		<?php
	}
	else{
		print("Não existe nenhuma pessoa com o ID = $id");
	}
	?>
</body>
</html>
