<?php

class Disciplina{
    var $nomeDisciplina;
    var $cargaHoraria;
    var $nomeProfessor;

    function getNomeDisciplina(){
        return $this->nomeDisciplina;
    }

    function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    function getNomeProfessor(){
        return $this->nomeProfessor;
    }

    function setNomeDisciplina($nomeDisciplina){
        $this->nomeDisciplina = $nomeDisciplina;
    }

    function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }

    function setNomeProfessor($nomeProfessor){
        $this->nomeProfessor = $nomeProfessor;
    }
}
?>