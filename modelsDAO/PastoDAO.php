<?php


class PastoDAO {

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

    public function cadastrarPasto($array) {
        $this->create->runCreate("pasto", $array);
        return $this->create->getresults();
    }

    public function selecionarPasto($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("pasto", $Termos, $vals);
    }

    public function deletarPasto($id) {
        $this->delete->runDelete("pasto", "where idpasto = :idpasto", "idpasto={$id}");
    }

    public function editarPasto($dados, $id) {
        $this->update->runUpdate("pasto", $dados, "where idpasto = :idpasto", "idpasto={$id}");
    }

}
