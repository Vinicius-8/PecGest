<?php
include '../configs/DataBanco.php';
include '../crud/ConexaoBancoDados.php';
include '../crud/Read.php';
include '../crud/Create.php';
include '../crud/Delete.php';
include '../crud/Update.php';
include '../modelsDAO/FazendaDAO.php';
$fazenda = new FazendaDAO();
$A = $fazenda->selecionarFazenda("*", "", "");


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1, shrink-to-fit=no" >

        <title>Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        <script>
           function verfazenda(idfazenda){
               alert("Ver fazenda");
           }

           function criarfazenda() {
              var a = document.getElementById('nomeFazenda').value;
              if(a!=""){                  
                document.write("<form id='AA' action='../scripts/criarFazenda.php' method='POST'> <input type='hidden' name='nome' value='"+a+"'> </form>");
                document.getElementById("AA").submit();
              }

           }
       </script>
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

        

        <div class="container center">
            <div class="row">
                <h2 id="q">Fazendas</h2>
                <a style="cursor:pointer" class="col" data-toggle="modal" data-target="#cadastFazenda"><img src="imgs/icn_add.png" id="addh" style="width: 2rem"></a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="cadastroFazenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cadastro de Fazenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nomeFazenda">Insira o nome da fazenda:</label>
                        <input type="name" class="form-control" id="nomeFazenda" placeholder="Ex.: Fazenda Bom Jesus">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" onclick="criarfazenda()" >Cadastrar Fazenda</button>
            </div>
            </div>
        </div>
        </div>
        

        <!--  Botões que representam as fazendas 

        <a href="#" class="btn btn-primary btn-lg active fazenda" role="button" onclick="verfazenda()">Fazenda A</a>
    
        <a href="#" class="btn btn-primary btn-lg active fazenda" role="button" aria-pressed="true">Fazenda B</a>
        -->
        <?php
        if(!empty($A)):
            for ($i = 0;$i<count($A);$i++){
                echo "<a href='#' class='btn btn-primary btn-lg active fazenda' role='button' onclick='verfazenda(".$A[$i]['id'].")'>".$A[$i]['nome']."</a>";
            }
        else:
            echo "<p style="text-align = 'center'">Voce ainda nao tem fazendas</p>";
        endif;
        ?>
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>

