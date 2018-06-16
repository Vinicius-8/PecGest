<?php

class Transicao {

    private $idTransicao;
    private $data;
    private $quantidade;
    private $idPastoSaida;
    private $idPastoEntrada;
    private $idRebanho;
    private $idIdadeSaida;
    private $idIdadeEntrada;
    private $idTipoTransicao;

    function __construct($idTransicao, $data, $quantidade, $idPastoSaida, $idPastoEntrada, $idRebanho, $idIdadeSaida, $idIdadeEntrada, $idTipoTransicao) {
        $this->idTransicao = $idTransicao;
        $this->data = $data;
        $this->quantidade = $quantidade;
        $this->idPastoSaida = $idPastoSaida;
        $this->idPastoEntrada = $idPastoEntrada;
        $this->idRebanho = $idRebanho;
        $this->idIdadeSaida = $idIdadeSaida;
        $this->idIdadeEntrada = $idIdadeEntrada;
        $this->idTipoTransicao = $idTipoTransicao;
    }

    function getIdTransicao() {
        return $this->idTransicao;
    }

    function getData() {
        return $this->data;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getIdPastoSaida() {
        return $this->idPastoSaida;
    }

    function getIdPastoEntrada() {
        return $this->idPastoEntrada;
    }

    function getIdRebanho() {
        return $this->idRebanho;
    }

    function getIdIdadeSaida() {
        return $this->idIdadeSaida;
    }

    function getIdIdadeEntrada() {
        return $this->idIdadeEntrada;
    }

    function getIdTipoTransicao() {
        return $this->idTipoTransicao;
    }

    function setIdTransicao($idTransicao) {
        $this->idTransicao = $idTransicao;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setIdPastoSaida($idPastoSaida) {
        $this->idPastoSaida = $idPastoSaida;
    }

    function setIdPastoEntrada($idPastoEntrada) {
        $this->idPastoEntrada = $idPastoEntrada;
    }

    function setIdRebanho($idRebanho) {
        $this->idRebanho = $idRebanho;
    }

    function setIdIdadeSaida($idIdadeSaida) {
        $this->idIdadeSaida = $idIdadeSaida;
    }

    function setIdIdadeEntrada($idIdadeEntrada) {
        $this->idIdadeEntrada = $idIdadeEntrada;
    }

    function setIdTipoTransicao($idTipoTransicao) {
        $this->idTipoTransicao = $idTipoTransicao;
    }

}
