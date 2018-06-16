<?php

class Idade {

    private $idIdade;
    private $faixaEtaria;
    private $unidadeAnimal;

    function __construct($idIdade, $faixaEtaria, $unidadeAnimal) {
        $this->idIdade = $idIdade;
        $this->faixaEtaria = $faixaEtaria;
        $this->unidadeAnimal = $unidadeAnimal;
    }

    function getIdIdade() {
        return $this->idIdade;
    }

    function getFaixaEtaria() {
        return $this->faixaEtaria;
    }

    function getUnidadeAnimal() {
        return $this->unidadeAnimal;
    }

    function setIdIdade($idIdade) {
        $this->idIdade = $idIdade;
    }

    function setFaixaEtaria($faixaEtaria) {
        $this->faixaEtaria = $faixaEtaria;
    }

    function setUnidadeAnimal($unidadeAnimal) {
        $this->unidadeAnimal = $unidadeAnimal;
    }

}
