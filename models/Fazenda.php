<?php

class Fazend {

    private $idFazenda;
    private $nome;

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
