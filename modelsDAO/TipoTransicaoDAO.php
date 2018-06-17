<?php

class TipoTransicaoDAO {

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

    public function cadastrarTipoTransicao($array) {
        $this->create->runCreate("tipo_transicao", $array);
        return $this->create->getresults();
    }

    public function selecionarTipoTransicao($daft, $Termos, $vals) {
        $this->read->setDaft($daft);
        $this->read->runRead("tipo_transicao", $Termos, $vals);
    }

    public function deletarTipoTransicao($id) {
        $this->delete->runDelete("tipo_transicao", "where idtipo = :idtipo", "idtipo={$id}");
    }

    public function editarTipoTransicao($dados, $id) {
        $this->update->runUpdate("tipo_transicao", $dados, "where idtipo = :idtipo", "idtipo={$id}");
    }

}
