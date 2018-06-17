<?php
include '../modelsDAO/FazendaDAO.php';

class ControllerFazenda {
    
    public function criarFazenda($nomeFazenda){
        $array = Array('nome'=>$nomeFazenda);
        $fazenda = new FazendaDAO();
        $fazenda->cadastrarFazenda($array);
    }
}
