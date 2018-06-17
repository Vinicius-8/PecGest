<?php
var_dump($_POST);
include '../configs/DataBanco.php';
include '../crud/ConexaoBancoDados.php';
include '../crud/Delete.php';
include '../crud/Read.php';
include '../crud/Create.php';
include '../crud/Update.php';
include '../controller/ControllerPasto.php';

if(isset($_POST['numero_pasto']) and isset($_POST['id_retiro'])){    
    $pasto = new ControllerPasto();
    $pasto->criarPasto($_POST['numero_pasto'], 0, $_POST['id_retiro']);
}
header("Location:../view/fazenda.php");