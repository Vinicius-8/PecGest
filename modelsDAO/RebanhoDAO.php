<?php

class RebanhoDAO {

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

    public function cadastrarRebanho($array) {
        $this->create->runCreate("rebanho", $array);
        return $this->create->getresults();
    }

    public function selecionarRebanho($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("rebanho", $Termos, $vals);
    }

    public function deletarRebanho($id) {
        $this->delete->runDelete("rebanho", "where idrebanho = :idrebanho", "idrebanho={$id}");
    }

    public function editarRebanho($dados, $id) {
        $this->update->runUpdate("rebanho", $dados, "where idrebanho = :idrebanho", "idrebanho={$id}");
    }

}
