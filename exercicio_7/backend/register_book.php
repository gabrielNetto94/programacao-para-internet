<?php 
$tittle = $_POST['tittle'];
$author = $_POST['author'];
$release_year = $_POST['release_year'];
$number_pages = $_POST['number_pages'];
$genre = $_POST['genre'];
$parental_rating = $_POST['parental_rating'];


include("Book.php");
include("../database/database.php");

$database = new Database();
/*
$book = new Book();

$book->setTittle($tittle);
$book->setAuthor($author);
$book->setRelease_year($release_year);
$book->setNumberPages($number_pages);
$book->setGenre($genre);
$book->setParentalRating($parental_rating);
*/
$result = $database->createBook($tittle,$author,$release_year,$number_pages,$genre,$parental_rating);
if($result == 1){
    echo "Dados inseridos com sucesso!";
}else{
    echo "Ocorreu um erro";
}
?>