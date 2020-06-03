<?php

class Database{

    function createDatabase(){

        include("config.php");
        $query = "CREATE TABLE IF NOT EXISTS BOOK(
            ID_BOOK INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            TITLE VARCHAR(60) NOT NULL,
            AUTHOR VARCHAR(30) NOT NULL,
            REALEASE_YEAR INT(4),
            NUMBER_PAGES INT(5),
            GENRE VARCHAR(30),
            PARENTAL_RATING  INT(2)
        );";
    }

    function indexBook(){
        include("config.php");

        $query = "SELECT * FROM DB_BOOKS.BOOK";
        $result = mysqli_query($connection, $query);

        /*if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<h4>id: " . $row["ID_BOOK"] . " - Name: " . $row["TITLE"] . " Autor: " . $row["AUTHOR"] . "</h4>";
            }
        } else {
            echo "0 results";
        }*/

        return $result;
        $connection->close();
    }

    function createBook($tittle, $author, $release_year, $number_pages, $genre, $parental_rating){

        include("config.php");
        $query = "INSERT INTO `db_books`.`book` (`TITLE`, `AUTHOR`, `REALEASE_YEAR`, `NUMBER_PAGES`, `GENRE`, `PARENTAL_RATING`) 
                    VALUES ('$tittle', '$author', '$release_year', '$number_pages', '$genre', '$parental_rating')";

        $result = mysqli_query($connection, $query);
        $connection->close();
        return $result;
    }
}
