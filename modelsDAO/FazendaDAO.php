<?php

class FazendaDAO {

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

    public function cadastrarFazenda($array) {
        var_dump($array);
        $this->create->runCreate("fazenda", $array);
        return $this->create->getresults();
    }

    public function selecionarFazenda($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("fazenda", $Termos, $vals);
        return $this->read->getresult();
    }

    public function deletarFazenda($id) {
        $this->delete->runDelete("fazenda", "where idfazenda = :idfazenda", "idfazenda={$id}");
    }

    public function editarFazenda($dados, $id) {
        $this->update->runUpdate("fazenda", $dados, "where idfazenda = :idfazenda", "idfazenda={$id}");
    }

}
