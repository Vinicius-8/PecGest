<?php

class TipoTransicao {

    private $idTipoTransicao;
    private $nome;

    function getIdTipoTransicao() {
        return $this->idTipoTransicao;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdTipoTransicao($idTipoTransicao) {
        $this->idTipoTransicao = $idTipoTransicao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

}
