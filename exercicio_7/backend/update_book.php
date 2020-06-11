<html>

<head>

	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>


	<?php

	include("../database/config.php");
	include("../database/database.php");

	$database = new Database;
	$id = $_GET["id"];

	$result = $database->selectOneBook($id);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	?>

		<!--@@@@@@@@@@@@@@@@@@@@@@@@ -->
		<div class="container">
			<h2>Alteração das informações do livro</h2>
			<form class="form-horizontal" id="form" action="update_info_book.php" method="POST">

				<input type="hidden" name="id_book" value="<?php print $row['ID_BOOK'] ?>" />
				
				<div class="form-group">
					<label class="control-label col-sm-2">Título:</label>
					<div class="col-xs-3">
						<input type="text" class="form-control" id="title" placeholder="Título do livro" name="title" value="<?php print $row['TITLE'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Autor:</label>
					<div class="col-xs-3">
						<input type="text" class="form-control" id="author" placeholder="Autor do livro" name="author" value="<?php print $row['AUTHOR'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Ano de lançamento</label>
					<div class="col-xs-3">
						<input type="number" class="form-control" id="release_year" placeholder="Ano de lançamento" name="release_year" value="<?php print $row['RELEASE_YEAR'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Número de páginas:</label>
					<div class="col-xs-3">
						<input type="number" class="form-control" id="number_pages" placeholder="Número de páginas" name="number_pages" value="<?php print $row['NUMBER_PAGES'] ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Gênero:</label>
					<div class="col-xs-3">
						<input type="text" class="form-control" id="genre" placeholder="Gênero do livro" name="genre" value="<?php print $row['GENRE'] ?>">
					</div>
				</div>



				<div class="form-group">
					<label class="control-label col-sm-2">Gênero:</label>
					<div class="col-xs-3">
						<select class="form-control" id="exampleFormControlSelect1" name="parental_rating">
							<option value="Livre" <?php if ($row['PARENTAL_RATING'] == "Livre") echo "selected"; ?>>Livre</option>
							<option value="10 anos" <?php if ($row['PARENTAL_RATING'] == "10 anos") echo "selected"; ?>>10 anos</option>
							<option value="12 anos" <?php if ($row['PARENTAL_RATING'] == "12 anos") echo "selected"; ?>>12 anos</option>
							<option value="14 anos" <?php if ($row['PARENTAL_RATING'] == "14 anos") echo "selected"; ?>>14 anos</option>
							<option value="16 anos" <?php if ($row['PARENTAL_RATING'] == "16 anos") echo "selected"; ?>>16 anos</option>
							<option value="18 anos" <?php if ($row['PARENTAL_RATING'] == "18 anos") echo "selected"; ?>>18 anos</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a id="btn-submit" onclick="validateForm()" class="btn btn-default" value="Alterar">Alterar</a>
					</div>
				</div>


			</form>

		</div><!-- end containar-->

	<?php
	} else {
		print("Não existe nenhum livro com o ID = $id");
	}
	?>

	<footer>
		<script src="../frontend/script.js"></script>
	</footer>
</body>

</html>