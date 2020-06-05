<?php

class Database
{

    function createDatabase()
    {

        $server = "localhost";
        $user = "root";
        $password = "";

        $connection = new mysqli($server, $user, $password);

        if ($connection->connect_error) {
            die("Conexão falhou: " . $connection->connect_error); // Termina se houver algum problema
            return false;
        }

        $query =  "CREATE DATABASE IF NOT EXISTS db_books;";

        $connection->query($query);

        $connection->select_db("db_books");

        if ($connection->query($query) === TRUE) {

            $query = "USE DB_BOOKS;";
            $connection->query($query);

            $query = "CREATE TABLE IF NOT EXISTS BOOK(
                ID_BOOK INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                TITLE VARCHAR(60) NOT NULL,
                AUTHOR VARCHAR(30) NOT NULL,
                RELEASE_YEAR INT(4),
                NUMBER_PAGES INT(5),
                GENRE VARCHAR(30),
                PARENTAL_RATING  VARCHAR(8)
            );";
            $connection->query($query);

            $connection->close();

            return true;
        }
    }

    function indexBook()
    {
        include("config.php");

        $query = "SELECT * FROM DB_BOOKS.BOOK";
        $result = mysqli_query($connection, $query);

        return $result;
        $connection->close();
    }

    function createBook($tittle, $author, $release_year, $number_pages, $genre, $parental_rating)
    {

        include("config.php");
        $query = "INSERT INTO `db_books`.`book` (`TITLE`, `AUTHOR`, `RELEASE_YEAR`, `NUMBER_PAGES`, `GENRE`, `PARENTAL_RATING`) 
                    VALUES ('$tittle', '$author', '$release_year', '$number_pages', '$genre', '$parental_rating')";

        if ($connection->query($query) === TRUE) {

            $connection->close();

            return true;
        }
    }

    function deleteBook($id)
    {
        include("config.php");

        $query = "DELETE FROM BOOK WHERE ID_BOOK = $id";

        if ($connection->query($query) === TRUE) {
            $connection->close();
            return true;
        } else {
            $connection->close();
            return false;
        }
    }

    function updateBook($id_book, $tittle, $author, $release_year, $number_pages, $genre, $parental_rating)
    {
        include("config.php");

        $query = "UPDATE `db_books`.`book` 
            SET `TITLE`='$tittle', `AUTHOR`='$author', `RELEASE_YEAR`='$release_year', `NUMBER_PAGES`='$number_pages', `GENRE`='$genre', `PARENTAL_RATING`='$parental_rating' 
            WHERE `ID_BOOK`='$id_book';
    ";

        if ($connection->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }

        $connection->close();
    }

    function selectOneBook($id)
    {
        include("config.php");

        $query = "SELECT * FROM BOOK WHERE ID_BOOK = $id";

        $result = $connection->query($query);

        $connection->close();

        return $result;
    }
}
