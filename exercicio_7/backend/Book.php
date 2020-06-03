<?php

class Book{
    var $tittle;
    var $author;
    var $release_year; 
    var $number_pages;
    var $genre;
    var $parental_rating;

    function getTittle(){
        return $this->tittle;
    }

    function getAuthor(){
        return $this->author;
    }

    function getRelease_year(){
        return $this->release_year;
    }

    function getNumberPages(){
        return $this->number_pages;
    }

    function getGenre(){
        return $this->genre;
    }

    function getParentalRating(){
        return $this->parental_rating;
    }

    function setTittle($tittle){
        $this->tittle = $tittle;
    }

    function setAuthor($author){
        $this->author = $author;
    }

    function setRelease_year($release_year){
        $this->$release_year = $release_year;
    }

    function setNumberPages($number){
        $this->number_pages = $number;
    }

    function setGenre($genre){
        $this->genre = $genre;
    }

    function setParentalRating($parental_rating){
        $this->parental_rating = $parental_rating;
    }
}
?>