<?php

include '../configs/DataBanco.php';
include '../crud/ConexaoBancoDados.php';
include '../crud/Read.php';
include '../crud/Create.php';
include '../crud/Delete.php';
include '../crud/Update.php';
include '../modelsDAO/RetiroDAO.php';
$retiro = new Read();

$id_fazenda =  $_POST['id_fazenda'];

$retiro->runRead("retiro","where id_fazenda = {$id_fazenda} ");
$result = $retiro->getresult();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no" >

        <title>Fazenda A</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        </head>
         
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img class="img" style="width: 4rem" src="../view/imgs/logo_pecgest_sf.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                </ul>
            </div>
        </nav>

        <script>
            function criarRetiro() {
              var a = document.getElementById('nomeRetiro').value;
              if(a!=""){                  
                document.write("<form id='criarRetiro' action='../scripts/criarRetiro.php' method='POST'> <input type='hidden' name='nome_retiro' value='"+a+"'> <input type='hidden' name='id_fazenda' value='"+<?= $_POST['id_fazenda']?>+"'> </form>");
                document.getElementById("criarRetiro").submit();
                }
              } 
        </script>   

        <div class="container-fluid">
            <div class="row">
                <h2 id="q">Fazenda A</h2>
                <a style="cursor:pointer" class="col" data-toggle="modal" data-target="#cadastroRetiro"><img src="imgs/icn_add.png" id="add" style="width: 2rem"></a>
            </div>
        </div>

        <!-- Modal de cadastro de retiro-->
        <div class="modal fade" id="cadastroRetiro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de Retiro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="return false">
                    <div class="form-group">
                        <label for="nomeFazenda">Insira o nome do retiro:</label>

                        <input type="name" class="form-control" id="nomeRetiro" placeholder="Ex.: Retiro A">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" onkeypress="criarRetiro()" onclick="criarRetiro(); this.form.submit()">Cadastrar Retiro</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal de Mostra do pasto-->
        <div class="modal fade" id="verPasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pasto 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal de inserção de pasto-->
        <div class="modal fade" id="insercaoPasto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Inserção de pasto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <script>
                        var id_retiro = null;
                        function inserirPasto(){
                           
                           var a = document.getElementById('numeroPasto').value;
                            if(a!=""){                  
                                 document.write("<form id='criarPasto' action='../scripts/criarPasto.php' method='POST'> <input type='hidden' name='numero_pasto' value='"+a+"'> <input type='hidden' name='id_retiro' value='"+id_retiro+"'> <input type='hidden' name='id_fazenda' value='"+<?= $_POST['id_fazenda']?>+"'></form>");
                                 document.getElementById("criarPasto").submit();
                             }
                             
                        }
                        
                        function sub(id){
                            id_retiro = id; 
                           
                        }
                    </script>
                    <form>
                        <div class="form-group">
                            <label for="nomeFazenda">Número do pasto</label>
                            <input type="name" class="form-control" id="numeroPasto" placeholder="Ex.: 2">
                        </div>
                    </form>
                </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" onclick="inserirPasto()">Inserir</button>
                </div>
                </div>
            </div>
        </div>
        

        <!--  Botões que representam os pastos -->
        <?php
       
            for($i = 0; $i<count($result); $i++ ){
                echo "<div class='container'>";
            
                echo "<h4 >{$result[$i]['nome']}</h4>";

            echo "<div class='jumbotron center'>";
               echo "<div class='container'>";
                   
                   $retiro->runRead("pasto","where id_retiro = {$result[$i]['id']} ");
                    $res = $retiro->getresult();
                  
                   for($j= 0; $j<(count($res));$j++){
                       echo "<a href='#' class='btn btn-primary btn-lg active pasto' data-toggle='modal' data-target='#verPasto' role='button' onclick='verPasto()'>{$res[$j]['numero_pasto']}</a>";
                   }
                echo "</div>";
                echo "<button type='button' style='margin: 1rem' data-toggle='modal' data-target='#insercaoPasto' class='btn btn-secondary' onclick='sub({$result[$i]['id']})'>Inserir pasto</button>
            </div>
            
        </div>";
            }
       
        ?>
        <!--
        <div class="container">
            
                <h4 >Retiro A</h4>                

            <div class="jumbotron center">                
                <div class="container">                    
                    <a href="#" class="btn btn-primary btn-lg active pasto" data-toggle="modal" data-target="#verPasto" role="button" onclick="verPasto()">1</a>
                    <a href="#" class="btn btn-primary btn-lg active pasto" role="button" onclick="verfazenda()">1</a>
                </div>
                <button type="button" style="margin: 1rem" data-toggle="modal" data-target="#insercaoPasto" class="btn btn-secondary">Inserir pasto</button>
            </div>
            
        </div>
-->
        
        <!-- <a href="#" class="btn btn-primary btn-lg active fazenda" role="button" onclick="verfazenda()">Fazenda A</a>
    
        <a href="#" class="btn btn-primary btn-lg active fazenda" role="button" aria-pressed="true">Fazenda B</a>
        -->
        
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>