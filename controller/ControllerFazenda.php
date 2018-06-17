<?php
include '../modelsDAO/FazendaDAO.php';

class ControllerFazenda {
    
    public function criarFazenda($nomeFazenda){
        $array = Array('nome'=>$nomeFazenda);
        $fazenda = new FazendaDAO();
        $result = $fazenda->cadastrarFazenda($array);
        
        if ($result != 0):
            echo "<script>alert('Não foi possivel cadastrar na fazenda@');</script>";
        endif;
    }
}
