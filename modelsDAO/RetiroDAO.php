<?php

class RetiroDAO {

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

    public function cadastrarRetiro($array) {
        $this->create->runCreate("retiro", $array);
        return $this->create->getresults();
    }

    public function selecionarRetiro($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("retiro", $Termos, $vals);
        return $this->read->getresult();
    }

    public function deletarRetiro($id) {
        $this->delete->runDelete("retiro", "where idretiro = :idretiro", "idretiro={$id}");
    }

    public function editarRetiro($dados, $id) {
        $this->update->runUpdate("retiro", $dados, "where idretiro = :idretiro", "idretiro={$id}");
    }

}
