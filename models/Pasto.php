<?php

class Pasto {

    private $idPasto;
    private $numero;
    private $tamanho;
    private $idRetiro;
    
    function __construct($idPasto, $numero, $tamanho, $idRetiro) {
        $this->idPasto = $idPasto;
        $this->numero = $numero;
        $this->tamanho = $tamanho;
        $this->idRetiro = $idRetiro;
    }

        function getIdPasto() {
        return $this->idPasto;
    }

    function getNumero() {
        return $this->numero;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getIdRetiro() {
        return $this->idRetiro;
    }

    function setIdPasto($idPasto) {
        $this->idPasto = $idPasto;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setIdRetiro($idRetiro) {
        $this->idRetiro = $idRetiro;
    }


}
