<?php
    
    $id_book = $_POST['id_book'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $release_year = $_POST['release_year'];
    $number_pages = $_POST['number_pages'];
    $genre = $_POST['genre'];
    $parental_rating = $_POST['parental_rating'];

    include("../database/database.php");

    $database = new Database();

    if($database->updateBook($id_book,$title,$author,$release_year,$number_pages,$genre,$parental_rating)){
        echo "<h3>Registro alterado com sucesso</h3>";
        header("Refresh:2; url=../frontend/index.php");
    }
    
?>