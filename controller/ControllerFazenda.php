<?php
include '../Load.php';

class ControllerFazenda {
    public function criarFazenda($nomeFazenda){
        $array = Array('nome'=>$nomeFazenda);
        $fazenda = new FazendaDAO()->cadastrarFazenda($array);
        
        if ($fazenda != 0):
            echo "Fazenda cadastrada com sucesso!";
        endif;
    }
}
