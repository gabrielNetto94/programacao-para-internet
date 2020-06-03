<!DOCTYPE html>
<html>

<head>
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
                    <td><a href=".php?id=<?php print $row['ID_BOOK'] ?>">Alterar </a></td>
                    <td><a onclick="myFunction()">Exlcuir </a></td>

                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }

        ?>

        <div id="demo"></div>
        <script>
            function myFunction() {
                var txt;
                var r = confirm("Deseja realmente exlcuir?");
                if (r == true) {
                    //excluir
                } else {
                    // cancelar
                }
                document.getElementById("demo").innerHTML = txt;
            }
        </script>
</body>

</html>