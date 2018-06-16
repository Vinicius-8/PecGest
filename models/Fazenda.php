<?php

class Fazenda {

    private $idFazenda;
    private $nome;
    
    function __construct($idFazenda, $nome) {
        $this->idFazenda = $idFazenda;
        $this->nome = $nome;
    }

        function getIdFazenda() {
        return $this->idFazenda;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdFazenda($idFazenda) {
        $this->idFazenda = $idFazenda;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

}
