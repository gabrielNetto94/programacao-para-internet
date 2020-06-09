<?php
$string = $_GET['string'];

include("../database/database.php");

$database =  new Database();

$result = $database->filter($string);

echo "<table>
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
</tr>";

while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" .$row["ID_BOOK"]. "</td>";
        echo "<td>" .$row["TITLE"]. "</td>";
        echo "<td>" .$row["AUTHOR"]. "</td>";
        echo "<td>" .$row["RELEASE_YEAR"]. "</td>";
        echo "<td>" .$row["NUMBER_PAGES"]. "</td>";
        echo "<td>" .$row["GENRE"]. "</td>";
        echo "<td>" .$row["PARENTAL_RATING"]. "</td>";?>
        <td><a href="../backend/update_book.php?id=<?php print $row['ID_BOOK'] ?>">Alterar </a></td>
        <td><a href="../backend/delete_book.php?id=<?php print $row['ID_BOOK'] ?>" onclick="return confirm('Deseja mesmo exlcuir o livro?');">Excluir </a></td>
        <?php
        echo "</tr>";
}
?>