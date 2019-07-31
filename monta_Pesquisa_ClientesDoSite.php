<?php
 session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 
    $ControlaAcesso = $_SESSION['Controla_Acesso_ConsultaCurriculo'];


    $Recebe_Nome= $_POST['nome'];
    $Recebe_CPF= $_POST['CPF'];
    $Recebe_email= $_POST['email'];  
    $Recebe_liberacao= $_POST['liberado'];
  //   $Recebe_IdadeInicio = $_POST['idadeInicio'];
  //   $Recebe_IdadeFinal = $_POST['idadeFinal'];
  
   /**  if (!empty($Recebe_Dt_lancamento)){*/
     
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();

                            

 
               if (strcasecmp($emailAdm,"Jefersonfire@gmail.com") == 0) {
?>



<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Curriculo Super 10!</title>
                                        


    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="icon" href="imagens/Ico.png">
    <script>
      // código javascript            
    </script>
  </head>

  <body>

    <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="imagens/Ico.png" />
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Home.php">Voltar para Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
 


         <div class="jumbotron">
         <form  method="post"  id="BuscaCliente" name="BuscaCliente" align="center"  action="monta_Pesquisa_ClientesDoSite.php">
             <div class="form-group">
             <input type="text" class="form-control" id="nome" name="nome" placeholder="Busca pome da pessoa...">
             </div>

             <div class="form-group">
             <input type="text" class="form-control" id="CPF" name="CPF" placeholder="CPF">
             </div>

             <div class="form-group">
             <input type="text" class="form-control" id="email" name="email" placeholder="Ou pelo Email...">
             </div>
                                 <label>Por liberação: </label> 
                                 <select id="liberado" name="liberado" placeholder="liberado" ></>
                                  <option></option>
                                  <option>SIM</option>
                                  <option>N</option> 
                                  </select>
             <button type="submit" class="btn btn-primary form-control">Buscar</button>
            </form>            
        </div>


          <div class="jumbotron">

          <?php

                       
                               $sql = " SELECT * from usuarios ";
                               $sql.= " where usuario like '%$Recebe_Nome%' ";
                               $sql.= " and CPF like '%$Recebe_CPF%' ";
                               $sql.= " and email like '%$Recebe_email%' ";
                               $sql.= " and Controla_Acesso_ConsultaCurriculo like '%$Recebe_liberacao%' ";

                             $resultado_id = mysqli_query($link, $sql);
 
                             while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              ?>
                              <form  method="post"  id="LiberaCliente" name="LiberaCliente" align="center"  action="libera_cpf_pagConsulta.php">

                               <?php
                    echo '<a href="#" class="list-group-item">';
                    echo '<h4 class="list-group-item-heading">'.$registro['usuario'].'</h4>';
                    echo '</br>';
                    
                     echo '<p class="list-group-item-text"> email:'.$registro['email'].'     CPF: '.$registro['CPF'].'</p>  Liberado:'.$registro['Controla_Acesso_ConsultaCurriculo'];
                      ?>

                          <input type="hidden" class="form-control" id="CPFCandidato" name="CPFCandidato" value="<?php echo $registro['CPF'];?>
                          ">

                         </br></br>
                         <button type="submit" class="btn btn-default" id="Libera"   >Libera Cliente </button>
                         </form>

                       <!-- ------------------------------------- -->
                     

                         <form  method="post"  id="BloqueiaCliente" name="BloqueiaCliente" align="center"  action="bloqueia_cpf_pag_Consulta.php">

                        <input type="hidden" class="form-control" id="CPFCandidato" name="CPFCandidato" value="<?php echo $registro['CPF'];?>
                          ">

                          

                         </br></br>
                         <button type="submit" class="btn btn-default" id="Bloqueia"   >Bloqueia Cliente </button>
                         </form>  
                         <?php
                           }// fim do laço de repetição
                          ?>
                        
          
        </div>

      
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  </body>
</html>










       <?php           
              
               } else {
               header('Location: index.php');
               } 
?>