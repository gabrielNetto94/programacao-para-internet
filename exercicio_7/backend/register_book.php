<?php 
$title = $_POST['title'];
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

if($database->createBook($title,$author,$release_year,$number_pages,$genre,$parental_rating)){
    echo "Dados inseridos com sucesso!";
    header("Refresh:0; url=../frontend/index.php");
}else{
    echo "Ocorreu um erro";
}
?>