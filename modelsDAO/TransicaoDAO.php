<?php

class TransicaoDAO {

    private $create;
    private $delete;
    private $read;
    private $update;

    function __construct() {
        $this->create = new Create();
        $this->delete = new Delete();
        $this->read = new Read();
        $this->update = new Update();
    }

    public function cadastrarTransicao($array) {
        $this->create->runCreate("retiro", $array);
        return $this->create->getresults();
    }

    public function selecionarTransicao($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("transicao", $Termos, $vals);
    }

}
