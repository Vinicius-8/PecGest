<?php
include '../configs/DataBanco.php';
include '../crud/ConexaoBancoDados.php';
include '../crud/Delete.php';
include '../crud/Read.php';
include '../crud/Create.php';
include '../crud/Update.php';
include '../controller/ControllerFazenda.php';
if(isset($_POST['nome'])){    
    $fazenda = new ControllerFazenda();
    $fazenda->criarFazenda($_POST['nome']);
}
header('Location:..');
