<?php
include '../configs/DataBanco.php';
include '../crud/ConexaoBancoDados.php';
include '../crud/Delete.php';
include '../crud/Read.php';
include '../crud/Create.php';
include '../crud/Update.php';
include '../controller/ControllerRetiro.php';

var_dump($_POST['nome_retiro']);
var_dump($_POST['id_fazenda']);

if(isset($_POST['nome_retiro']) and $_POST['id_fazenda']):
    $retiro = new ControllerRetiro();
    $retiro->criarRetiro($_POST['nome_retiro'], $_POST['id_fazenda']);
endif;
header('Location:..');
