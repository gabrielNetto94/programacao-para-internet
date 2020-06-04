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

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	?>
		<form action="update_info_book.php" method="POST" />
		<input type="hidden" name="id_book" value="<?php print $row['ID_BOOK'] ?>" />

		Título: <input type="text" name="tittle" value="<?php print $row['TITLE'] ?>" required /><br>
		Autor: <input type="text" name="author" value="<?php print $row['AUTHOR'] ?>" required /><br>
		Ano de lançamento: <input type="number" name="release_year" value="<?php print $row['RELEASE_YEAR'] ?>" required /><br>
		Número de páginas: <input type="number" name="number_pages" value="<?php print $row['NUMBER_PAGES'] ?>" required /><br>
		Gênero: <input type="text" name="genre" value="<?php print $row['GENRE'] ?>" required /><br>		
		Classificação indicativa: <select name="parental_rating">
			<option value="Livre"<?php if($row['PARENTAL_RATING'] == "Livre") echo "selected"; ?>>Livre</option>
			<option value="10 anos"<?php if($row['PARENTAL_RATING'] == "10 anos") echo "selected"; ?> >10 anos</option>
			<option value="12 anos"<?php if($row['PARENTAL_RATING'] == "12 anos") echo "selected"; ?> >12 anos</option>
			<option value="14 anos"<?php if($row['PARENTAL_RATING'] == "14 anos") echo "selected"; ?>>14 anos</option>
			<option value="16 anos"<?php if($row['PARENTAL_RATING'] == "16 anos") echo "selected"; ?>>16 anos</option>
			<option value="18 anos"<?php if($row['PARENTAL_RATING'] == "18 anos") echo "selected"; ?>>18 anos</option>
		</select>


		<input type="submit" value="Alterar" />

		</form>
	<?php
	} else {
		print("Não existe nenhum livro com o ID = $id");
	}
	?>
</body>

</html>