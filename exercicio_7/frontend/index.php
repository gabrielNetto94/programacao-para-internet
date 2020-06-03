<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Listagem dos livros</h2>
    <?php

    include("../database/database.php");
    $database = new Database();
    $result = $database->indexBook();
    ?>
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
            echo "0 results";
        }
        ?>
    </table>
        

        <!-- Trigger/Open The Modal -->
        <button id="myBtn">
            <h3>Cadastrar livro</h3>
        </button>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1>Cadastro de livro</h1>
                <form action="../backend/register_book.php" method="POST" />

                Título: <input type="text" name="tittle" required /><br>
                Autor: <input type="text" name="author" required /><br>
                Ano de lançamento: <input type="number" name="release_year" required /><br>
                Número de páginas: <input type="number" name="number_pages" required /><br>
                Gênero: <input type="text" name="genre" required /><br>
                Classificação indicativa: <input type="number" name="parental_rating" required /><br>

                <input type="submit" value="Cadastrar" />
                </form>
            </div>

        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
</body>

</html>