<?php

class LotacaoDAO {

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

    public function cadastrarLotacao($array) {
        $this->create->runCreate("lotacao", $array);
        return $this->create->getresults();
    }

    public function selecionarLotacao($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("lotacao", $Termos, $vals);
    }

    public function deletarLotacao($id) {
        $this->delete->runDelete("lotacao", "where idretiro = :idretiro", "idretiro={$id}");
    }

    public function editarLotacao($dados, $id) {
        $this->update->runUpdate("lotacao", $dados, "where idretiro = :idretiro", "idretiro={$id}");
    }

}
