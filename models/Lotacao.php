<?php

class Lotacao {
    private $quantidade;
    private $genero;
    private $idIdade;
    private $idRebanho;
    private $idPasto;
    
    function __construct($quantidade, $genero, $idIdade, $idRebanho, $idPasto) {
        $this->quantidade = $quantidade;
        $this->genero = $genero;
        $this->idIdade = $idIdade;
        $this->idRebanho = $idRebanho;
        $this->idPasto = $idPasto;
    }

    
    function getQuantidade() {
        return $this->quantidade;
    }

    function getGenero() {
        return $this->genero;
    }

    function getIdIdade() {
        return $this->idIdade;
    }

    function getIdRebanho() {
        return $this->idRebanho;
    }

    function getIdPasto() {
        return $this->idPasto;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setIdIdade($idIdade) {
        $this->idIdade = $idIdade;
    }

    function setIdRebanho($idRebanho) {
        $this->idRebanho = $idRebanho;
    }

    function setIdPasto($idPasto) {
        $this->idPasto = $idPasto;
    }


}
