<?php

class Retiro {

    private $idRetiro;
    private $nome;
    private $idFazenda;
    
    function __construct($idRetiro, $nome, $idFazenda) {
        $this->idRetiro = $idRetiro;
        $this->nome = $nome;
        $this->idFazenda = $idFazenda;
    }

        function getIdRetiro() {
        return $this->idRetiro;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdFazenda() {
        return $this->idFazenda;
    }

    function setIdRetiro($idRetiro) {
        $this->idRetiro = $idRetiro;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdFazenda($idFazenda) {
        $this->idFazenda = $idFazenda;
    }

}
