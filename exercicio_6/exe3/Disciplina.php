<?php

class Disciplina{
    var $nome;
    var $cargaHoraria;
    var $nomeProfessor;

    function getNome(){
        return $this->nome;
    }

    function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    function getNomeProfessor(){
        return $this->nomeProfessor;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }

    function setNomeProfessor($nomeProfessor){
        $this->nomeProfessor = $nomeProfessor;
    }
}
?>