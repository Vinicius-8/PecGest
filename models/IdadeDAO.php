<?php

class IdadeDAO {

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

    public function cadastrarIdade($array) {
        $this->create->runCreate("idade", $array);
        return $this->create->getresults();
    }

    public function selecionarIdade($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("idade", $Termos, $vals);
    }

    public function deletarIdade($id) {
        $this->delete->runDelete("idade", "where ididade = :ididade", "ididade={$id}");
    }

    public function editarIdade($dados, $id) {
        $this->update->runUpdate("idade", $dados, "where ididade = :ididade", "ididade={$id}");
    }

}
