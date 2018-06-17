<?php

/**
 * Description of ControllerPasto
 *
 * @author Vinicius
 */

include '../modelsDAO/PastoDAO.php';
class ControllerPasto {
    public function criarPasto($numero_pasto,$tamanho,$id_retiro){
        $array = array('numero_pasto'=>$numero_pasto,'tamanho'=>$tamanho,'id_retiro'=>$id_retiro);
        $pasto = new PastoDAO();
        $pasto->cadastrarPasto($array);
    }
    
   
}
