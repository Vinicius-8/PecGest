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
           function verfazenda(id_fazenda){
               
              if(id_fazenda!=""){                  
                document.write("<form id='verFazenda' action='./fazenda.php' method='POST'>\n\
                    <input type='hidden' name='id_fazenda' value='"+id_fazenda+"'> \n\
                     </form>");
                document.getElementById("verFazenda").submit();
                
              }
           }

           function criarfazenda() {
              var a = document.getElementById('nomeFazenda').value;
              if(a!=""){                  
                document.write("<form id='criarFazenda' action='../scripts/criarFazenda.php' method='POST'> <input type='hidden' name='nome' value='"+a+"'> </form>");
                document.getElementById("criarFazenda").submit();
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
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movimentacoes.php">Movimentações</a>
                </li>
                </ul>
            </div>
        </nav>
        

            <form>
                <h2 style="margin:2rem">Entradas</h2>
                <div class="form-group">
                    <label for="dataEnt">Data:</label>
                    <input type="date" class="form-control" id="dataEnt" >
                </div>

                <div class="form-group">
                    <label for="numEnt">Insira a quantidade de animais na lotação:</label>
                    <input type="name" class="form-control" id="numEnt" >
                </div>

                <div class="form-group">
                    <label for="rebanhoEnt">Rebanho</label>
                    <input type="name" class="form-control" id="rebanhoEnt" >
                </div>

                <div class="form-group">
                    <label for="idadeEnt">Idade</label>
                    <input type="name" class="form-control" id="idadeEnt" >
                </div>  
                
                <div class="form-group">
                    <label>Pasto de Entrada</label>
                    <select class="form-control form-control-lg">
                        <option></option>
                        <option>Opção 1</option>
                        <option>Opção 2</option>    
                    </select>
                </div>  

                <button type="submit" class="btn btn-primary">Registrar entrada</button>
                
                
            </form>


            <form>
                <h2 style="margin:2rem">Saídas</h2>
                <div class="form-group">
                    <label for="dataSai">Data:</label>
                    <input type="date" class="form-control" id="dataSai" >
                </div>

                <div class="form-group">
                    <label for="numSai">Insira a quantidade de animais:</label>
                    <input type="name" class="form-control" id="numSai" >
                </div>

                <div class="form-group">
                    <label for="rebanhoSai">Rebanho</label>
                    <input type="name" class="form-control" id="rebanhoSai" >
                </div>

                <div class="form-group">
                    <label for="idadeSai">Idade</label>
                    <input type="name" class="form-control" id="idadeSai" >
                </div>     

                <div class="form-group">
                    <label>Pasto de Saída</label>
                    <select class="form-control form-control-lg">
                        <option></option>
                        <option>Opção 1</option>
                        <option>Opção 2</option>    
                    </select>
                </div> 

                <button type="submit" class="btn btn-primary">Registrar saída</button>
            </form>


            <form>
                <h2 style="margin:2rem">Manejo</h2>
                <div class="row">                    
                    <div style="margin-right:2rem; margin-left:2rem" class="form-group">
                        <label>Pasto de Saída</label>
                        <select class="form-control form-control-lg">
                            <option></option>
                            <option>Opção 1</option>
                            <option>Opção 2</option>    
                        </select>
                    </div> 

                    <div style="margin-right:2rem" class="form-group">
                        <label>Pasto de Entrada</label>
                        <select class="form-control form-control-lg">
                            <option></option>
                            <option>Opção 1</option>
                            <option>Opção 2</option>    
                        </select>
                    </div> 
                </div>
                <button type="submit" class="btn btn-primary">Registrar manejo</button><br><br><br><br>
            </form>
             
            
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>

