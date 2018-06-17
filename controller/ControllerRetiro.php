<?php

/**
 * Description of ControllerRetiro
 *
 * @author Vinicius
 */
include '../modelsDAO/RetiroDAO.php';
class ControllerRetiro {
    public function criarRetiro($nome,$id_fazenda){
        $array = array('nome'=>$nome,'id_fazenda'=>$id_fazenda);
        $retiro = new RetiroDAO();
        $retiro->cadastrarRetiro($array);
    }
}
