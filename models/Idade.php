<?php

class Idade {

    private $idIdade;
    private $faixaEtaria;
    private $unidadeAnimal;

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
