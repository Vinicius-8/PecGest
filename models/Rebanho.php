<?php

class Rebanho {

    private $idRebanho;
    private $nome;
    
    function __construct($idRebanho, $nome) {
        $this->idRebanho = $idRebanho;
        $this->nome = $nome;
    }

        function getIdRebanho() {
        return $this->idRebanho;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdRebanho($idRebanho) {
        $this->idRebanho = $idRebanho;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

}
