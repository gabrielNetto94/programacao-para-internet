<!DOCTYPE html>
<html>

<head>
    <title>Livros</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">

    <style>
        #btn-submit:hover {
            cursor: pointer;
            background-color: #666;
        }
    </style>
</head>

<body>
    <h2>Listagem dos livros</h2>
    <button id="myBtn">
        <h3>Cadastrar livro</h3>
    </button>

    <input id="input-search" onkeyup="filterData(this.value)" placeholder="Pesquisar livros" type="text"></input>
    <table>
        <tr>
            <th>Id</th>
            <th>Título do livro</th>
            <th>Autor</th>
            <th>Ano de lançamento</th>
            <th>Número de páginas</th>
            <th>Gênero</th>
            <th>Classificação indicativa</th>
            <th>Alterar</th>
            <th>Excluir</th>

        </tr>
        
        <?php
        //error_reporting(0); //Esconde os possíveis erros do php

        include("../database/database.php");
        $database = new Database();
        if ($database->createDatabase()) {
            $result = $database->indexBook();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <tr>
                        <td><?php echo $row["ID_BOOK"] ?> </td>
                        <td><?php echo $row["TITLE"] ?> </td>
                        <td><?php echo $row["AUTHOR"] ?> </td>
                        <td><?php echo $row["RELEASE_YEAR"] ?> </td>
                        <td><?php echo $row["NUMBER_PAGES"] ?> </td>
                        <td><?php echo $row["GENRE"] ?> </td>
                        <td><?php echo $row["PARENTAL_RATING"] ?> </td>
                        <td><a href="../backend/update_book.php?id=<?php print $row['ID_BOOK'] ?>">Alterar </a></td>
                        <td><a href="../backend/delete_book.php?id=<?php print $row['ID_BOOK'] ?>" onclick="return confirm('Deseja mesmo exlcuir o livro?');">Excluir </a></td>

                    </tr>
        <?php
                }
            } else {
                echo "<td>0 resultados </td>";
            }
        }

        ?>
    </table>

<div id="teste"></div>
<input type="button" value="Generate a table." onclick="generate_table()">

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Cadastro de livro</h1>
            <form id="form" action="../backend/register_book.php" method="POST" />

            Título: <input id="title" type="text" name="tittle" required /><br>
            Autor: <input id="author" type="text" name="author" required /><br>
            Ano de lançamento: <input id="release_year" type="number" name="release_year" required /><br>
            Número de páginas: <input id="number_pages" type="number" name="number_pages" required /><br>
            Gênero: <input id="genre" type="text" name="genre" required /><br>
            Classificação indicativa: <select name="parental_rating">
                <option value="Livre">Livre</option>
                <option value="10 anos">10 anos</option>
                <option value="12 anos">12 anos</option>
                <option value="14 anos">14 anos</option>
                <option value="16 anos">16 anos</option>
                <option value="18 anos">18 anos</option>
            </select><br><br>

            <input id="btn-submit" onclick="validateForm()" value="Cadastrar" />
            </form>

        </div>

    </div>


    <footer>
        <script src="script.js"></script>
    </footer>

</body>

</html>