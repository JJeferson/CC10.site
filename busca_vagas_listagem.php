<?php
   session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 



     $Recebe_Titulo= $_POST['titulo'];
     $Recebe_Formacao_Requerida = $_POST['formacaoRequerida']; 
     $Recebe_Dt_lancamento = $_POST['Dt_lancamento'];
     $Recebe_Area = $_POST['area'];
     $Recebe_Estado = $_POST['estado']; 
     $Recebe_Pais = $_POST['pais']; 
   

     
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();



   
     if (!empty($Recebe_Titulo)){

   /** Primeira Clausula, caso titulo for preenchido e o resto null */
                  ?>




<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo Super 10!</title>
        <!-- 
    

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




                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Area para recrutadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_cadastra_novaVaga.php">Cadastrar nova vaga</a></li>
                            <li><a href="">Buscar curriculos</a></li>
                          
                            </ul>
                            </li>

                            <li><a href="busca_vagas.php">Buscar Vagas</a></li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_Curriculo.php">Curriculo</a></li>
                            <li><a href="altera_senha.php">Alterar tua senha</a></li>
                            <li><a href="editar_dados_cadastrais.php">Dados cadastrais</a></li>
                            <li><a href="pergunta_excluir.php">Excluir cadastro</a></li>
                            </ul>
                            </li>





                <li><a href="sair.php">Deslogar</a></li>
                <li class="">
                        <div class="col-md-12">

               </form>
                    </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

                                         
                    
           <div class="jumbotron">
            <h3>Listagem de vagas</h3>
            <p>
             <form  method="post"  id="BuscaVagas" name="BuscaVagas" align="center"  action="busca_vagas_listagem.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado">Estado</>
                                  <option> </option>
                                  <option>RS</option>
                                  <option>AC</option>
                                  <option>AL</option>
                                  <option>AM</option>
                                  <option>AP</option>
                                  <option>BA</option>
                                  <option>CE</option>
                                  <option>DF</option>
                                  <option>ES</option>
                                  <option>GO</option>
                                  <option>MA</option>
                                  <option>MG</option>
                                  <option>MS</option>
                                  <option>MT</option>
                                  <option>PA</option>
                                  <option>PB</option>
                                  <option>PE</option>
                                  <option>PI</option>
                                  <option>PR</option>
                                  <option>RJ</option>
                                  <option>RN</option>
                                  <option>RO</option>
                                  <option>RR</option>
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>SE</option>
                                  <option>SP</option>
                                  <option>TO</option>
                                  <option>Outro</option>
                                  </select>

                                  <label for="exampleInputEmail1">Pais</label>
                                  <select id="pais" name="pais" placeholder="pais"  >Estado</>
                                  <option> </option>
                                  <option>Brasil</option>
                                  <option>Argentina</option>
                                  <option>Chile</option>
                                  <option>EUA</option>
                                  <option>Canada</option>
                                  <option>Mexico</option>
                                  <option>Europa</option>
                                  <option>Russia</option>
                                  <option>Japao</option>
                                  <option>China</option>
                                  <option>Outro</option>
                                  </select>
                                   
                                   
                                    <label for="exampleInputEmail1">Data de lançamento da vaga</label>
                                    <input type="date"  id="Dt_lancamento" name="Dt_lancamento"  " >

                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area"   >Estado</>
                                  <option> </option>
                                   <option>TI/Informatica</option>
                                  <option>Saude</option>
                                  <option>Administração</option>
                                  <option>Educação</option>
                                  <option>Mecanica</option>
                                  <option>Engenharia</option>
                                  <option>Jornalismo</option>
                                  <option>Logistica</option>
                                  <option>Moda</option>
                                  <option>Musica</option>
                                  <option>Produção</option>
                                  <option>Publicidade</option>
                                  <option>Quimica</option>
                                  <option>RH</option>
                                  <option>Seguros</option>
                                  <option>Direito</option>
                                  <option>Açougue/Padarias/Diversos</option>
                                  <option>Eletrica-Eletrecista-Manutencao</option>
                                  <option>Telecomunicações</option>
                                  <option>Distribuição</option>
                                  <option>Trasnporte-Aereo</option>
                                  <option>Transporte-Mar</option>
                                  <option>Transporte-Terrestre</option>
                                  <option>Turismo</option>
                                  <option>Tributação</option>
                                  <option>Veterinaria</option>
                                  <option>Hotelaria</option>
                                  <option>Administração-Empresas</option>
                                  <option>Farmacia</option>
                                  <option>Cinema</option>
                                  <option>Outro</option>
                                  </select>
                                 </br></br>
                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>     
            </p>
          </div>

                       <?php
                       /**Lista das vagas */

                              $sql = " SELECT * from vagas where titulo like '%$Recebe_Titulo%' order by dt_lancamento DESC";

                              $resultado_id = mysqli_query($link, $sql);

        
                              while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              echo '<a href="#" class="list-group-item">';
                              echo '<h4 class="list-group-item-heading">'.$registro['titulo'].' <small> - '.$registro['area'].'</small></h4>';
                              echo '<p class="list-group-item-text"> Lançado em '.$registro['dt_lancamento'].' - '.$registro['estado'].' - '.$registro['pais'].'</p>';
                              echo '<p class="list-group-item-text"> Formação Requerida '.$registro['formacaoMinima'].'   Vaga cadastrada por '.$registro['emailRecrutador'].'</p>';
                              echo '</br></br> <p class="list-group-item-text">'.$registro['descricao'].'</p>';


                               echo '</a>';

 
                       ?>



          <div class="clearfix"></div>
        </div>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    </body>
</html>
         
        




                    <?php }//Fim do primeiro if, se titulo não é vasio
 

     }else {
            
              if (!empty($Recebe_Formacao_Requerida)){

                  /** Segunda  Clausula, caso formação primaria  for preenchido e o resto null */
                  ?>

 

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo 10!</title>
        <!-- 
    

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




                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Area para recrutadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_cadastra_novaVaga.php">Cadastrar nova vaga</a></li>
                            <li><a href="">Buscar curriculos</a></li>
                          
                            </ul>
                            </li>

                            <li><a href="busca_vagas.php">Buscar Vagas</a></li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_Curriculo.php">Curriculo</a></li>
                            <li><a href="altera_senha.php">Alterar tua senha</a></li>
                            <li><a href="editar_dados_cadastrais.php">Dados cadastrais</a></li>
                            <li><a href="pergunta_excluir.php">Excluir cadastro</a></li>
                            </ul>
                            </li>





                <li><a href="sair.php">Deslogar</a></li>
                <li class="">
                        <div class="col-md-12">

               </form>
                    </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

                                         
                    
           <div class="jumbotron">
            <h3>Listagem de vagas</h3>
            <p>
             <form  method="post"  id="BuscaVagas" name="BuscaVagas" align="center"  action="busca_vagas_listagem.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado">Estado</>
                                  <option> </option>
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>PR</option>
                                  <option>SP</option>
                                  <option>RJ</option>
                                  <option>Outro</option>
                                  </select>

                                  <label for="exampleInputEmail1">Pais</label>
                                  <select id="pais" name="pais" placeholder="pais"  >Estado</>
                                  <option> </option>
                                  <option>Brasil</option>
                                  <option>Argentina</option>
                                  <option>EUA</option>
                                  <option>Canada</option>
                                  <option>Mexico</option>
                                  </select>
                                   
                                   
                                    <label for="exampleInputEmail1">Data de lançamento da vaga</label>
                                    <input type="date"  id="Dt_lancamento" name="Dt_lancamento"  " >

                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area"   >Estado</>
                                  <option> </option>
                                  <option>TI/Informatica</option>
                                  <option>Saude</option>
                                  <option>Administração</option>
                                  <option>Educação</option>
                                  <option>Mecanica</option>
                                  <option>Engenharia</option>
                                  </select>
                                 </br></br>
                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>     
            </p>
          </div>

                       <?php
                       /**Lista das vagas */

                              $sql = " SELECT * from vagas where formacaoMinima like '%$Recebe_Formacao_Requerida%' order by dt_lancamento DESC";

                              $resultado_id = mysqli_query($link, $sql);

        
                              while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              echo '<a href="#" class="list-group-item">';
                              echo '<h4 class="list-group-item-heading">'.$registro['titulo'].' <small> - '.$registro['area'].'</small></h4>';
                              echo '<p class="list-group-item-text"> Lançado em '.$registro['dt_lancamento'].' - '.$registro['estado'].' - '.$registro['pais'].'</p>';
                              echo '<p class="list-group-item-text"> Formação Requerida '.$registro['formacaoMinima'].'   Vaga cadastrada por '.$registro['emailRecrutador'].'</p>';
                              echo '</br></br> <p class="list-group-item-text">'.$registro['descricao'].'</p>';


                               echo '</a>';

 
                       ?>



          <div class="clearfix"></div>
        </div>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    </body>
</html>
         
        




                  <?php 

                  }//Fim do segundo if, se formação requeria não é vasio mas o resto é null    
                 

     }else{
            

            // Terceiro filtro, estado preenchido o resto vasio
                 if (!empty($Recebe_Estado)){

                  
                  ?>


<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo 10!</title>
        <!-- 
    

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




                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Area para recrutadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_cadastra_novaVaga.php">Cadastrar nova vaga</a></li>
                            <li><a href="">Buscar curriculos</a></li>
                          
                            </ul>
                            </li>

                            <li><a href="busca_vagas.php">Buscar Vagas</a></li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_Curriculo.php">Curriculo</a></li>
                            <li><a href="altera_senha.php">Alterar tua senha</a></li>
                            <li><a href="editar_dados_cadastrais.php">Dados cadastrais</a></li>
                            <li><a href="pergunta_excluir.php">Excluir cadastro</a></li>
                            </ul>
                            </li>





                <li><a href="sair.php">Deslogar</a></li>
                <li class="">
                        <div class="col-md-12">

               </form>
                    </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

                                         
                    
           <div class="jumbotron">
            <h3>Listagem de vagas</h3>
            <p>
             <form  method="post"  id="BuscaVagas" name="BuscaVagas" align="center"  action="busca_vagas_listagem.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado">Estado</>
                                  <option> </option>
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>PR</option>
                                  <option>SP</option>
                                  <option>RJ</option>
                                  <option>Outro</option>
                                  </select>

                                  <label for="exampleInputEmail1">Pais</label>
                                  <select id="pais" name="pais" placeholder="pais"  >Estado</>
                                  <option> </option>
                                  <option>Brasil</option>
                                  <option>Argentina</option>
                                  <option>EUA</option>
                                  <option>Canada</option>
                                  <option>Mexico</option>
                                  </select>
                                   
                                   
                                    <label for="exampleInputEmail1">Data de lançamento da vaga</label>
                                    <input type="date"  id="Dt_lancamento" name="Dt_lancamento"  " >

                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area"   >Estado</>
                                  <option> </option>
                                  <option>TI/Informatica</option>
                                  <option>Saude</option>
                                  <option>Administração</option>
                                  <option>Educação</option>
                                  <option>Mecanica</option>
                                  <option>Engenharia</option>
                                  </select>
                                 </br></br>
                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>     
            </p>
          </div>

                       <?php
                       /**Lista das vagas */

                              $sql = " SELECT * from vagas where estado like '%$Recebe_Estado%' order by dt_lancamento DESC";

                              $resultado_id = mysqli_query($link, $sql);

        
                              while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              echo '<a href="#" class="list-group-item">';
                              echo '<h4 class="list-group-item-heading">'.$registro['titulo'].' <small> - '.$registro['area'].'</small></h4>';
                              echo '<p class="list-group-item-text"> Lançado em '.$registro['dt_lancamento'].' - '.$registro['estado'].' - '.$registro['pais'].'</p>';
                              echo '<p class="list-group-item-text"> Formação Requerida '.$registro['formacaoMinima'].'   Vaga cadastrada por '.$registro['emailRecrutador'].'</p>';
                              echo '</br></br> <p class="list-group-item-text">'.$registro['descricao'].'</p>';


                               echo '</a>';

 
                       ?>



          <div class="clearfix"></div>
        </div>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    </body>
</html>



                  <?php 

                  }//Fim do terceiro if, se estado não é vasio mas o resto é null    
                 
            }else{ 
             
                 //Quarto teste, se pais for preenchido e o resto é null $Recebe_Pais
                 if (!empty($Recebe_Pais)){

                  
                  ?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo 10!</title>
        <!-- 
    

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




                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Area para recrutadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_cadastra_novaVaga.php">Cadastrar nova vaga</a></li>
                            <li><a href="">Buscar curriculos</a></li>
                          
                            </ul>
                            </li>

                            <li><a href="busca_vagas.php">Buscar Vagas</a></li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_Curriculo.php">Curriculo</a></li>
                            <li><a href="altera_senha.php">Alterar tua senha</a></li>
                            <li><a href="editar_dados_cadastrais.php">Dados cadastrais</a></li>
                            <li><a href="pergunta_excluir.php">Excluir cadastro</a></li>
                            </ul>
                            </li>





                <li><a href="sair.php">Deslogar</a></li>
                <li class="">
                        <div class="col-md-12">

               </form>
                    </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

                                         
                    
           <div class="jumbotron">
            <h3>Listagem de vagas</h3>
            <p>
             <form  method="post"  id="BuscaVagas" name="BuscaVagas" align="center"  action="busca_vagas_listagem.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado">Estado</>
                                  <option> </option>
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>PR</option>
                                  <option>SP</option>
                                  <option>RJ</option>
                                  <option>Outro</option>
                                  </select>

                                  <label for="exampleInputEmail1">Pais</label>
                                  <select id="pais" name="pais" placeholder="pais"  >Estado</>
                                  <option> </option>
                                  <option>Brasil</option>
                                  <option>Argentina</option>
                                  <option>EUA</option>
                                  <option>Canada</option>
                                  <option>Mexico</option>
                                  </select>
                                   
                                   
                                    <label for="exampleInputEmail1">Data de lançamento da vaga</label>
                                    <input type="date"  id="Dt_lancamento" name="Dt_lancamento"  " >

                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area"   >Estado</>
                                  <option> </option>
                                  <option>TI/Informatica</option>
                                  <option>Saude</option>
                                  <option>Administração</option>
                                  <option>Educação</option>
                                  <option>Mecanica</option>
                                  <option>Engenharia</option>
                                  </select>
                                 </br></br>
                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>     
            </p>
          </div>

                       <?php
                       /**Lista das vagas */

                              $sql = " SELECT * from vagas where pais like '%$Recebe_Pais%' order by dt_lancamento DESC";

                              $resultado_id = mysqli_query($link, $sql);

        
                              while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              echo '<a href="#" class="list-group-item">';
                              echo '<h4 class="list-group-item-heading">'.$registro['titulo'].' <small> - '.$registro['area'].'</small></h4>';
                              echo '<p class="list-group-item-text"> Lançado em '.$registro['dt_lancamento'].' - '.$registro['estado'].' - '.$registro['pais'].'</p>';
                              echo '<p class="list-group-item-text"> Formação Requerida '.$registro['formacaoMinima'].'   Vaga cadastrada por '.$registro['emailRecrutador'].'</p>';
                              echo '</br></br> <p class="list-group-item-text">'.$registro['descricao'].'</p>';


                               echo '</a>';

 
                       ?>



          <div class="clearfix"></div>
        </div>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    </body>
</html>


                  <?php 

                  }//Fim do quarto if, se pais não é vasio mas o resto é null    
                 
            }else{ 
            
                   //Quinto teste, se area for preenchido e o resto null 
                 if (!empty($Recebe_Area)){

                  
                  ?>


                  <!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo 10!</title>
        <!-- 
    

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




                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Area para recrutadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_cadastra_novaVaga.php">Cadastrar nova vaga</a></li>
                            <li><a href="">Buscar curriculos</a></li>
                          
                            </ul>
                            </li>

                            <li><a href="busca_vagas.php">Buscar Vagas</a></li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_Curriculo.php">Curriculo</a></li>
                            <li><a href="altera_senha.php">Alterar tua senha</a></li>
                            <li><a href="editar_dados_cadastrais.php">Dados cadastrais</a></li>
                            <li><a href="pergunta_excluir.php">Excluir cadastro</a></li>
                            </ul>
                            </li>





                <li><a href="sair.php">Deslogar</a></li>
                <li class="">
                        <div class="col-md-12">

               </form>
                    </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

                                         
                    
           <div class="jumbotron">
            <h3>Listagem de vagas</h3>
            <p>
             <form  method="post"  id="BuscaVagas" name="BuscaVagas" align="center"  action="busca_vagas_listagem.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado">Estado</>
                                  <option> </option>
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>PR</option>
                                  <option>SP</option>
                                  <option>RJ</option>
                                  <option>Outro</option>
                                  </select>

                                  <label for="exampleInputEmail1">Pais</label>
                                  <select id="pais" name="pais" placeholder="pais"  >Estado</>
                                  <option> </option>
                                  <option>Brasil</option>
                                  <option>Argentina</option>
                                  <option>EUA</option>
                                  <option>Canada</option>
                                  <option>Mexico</option>
                                  </select>
                                   
                                   
                                    <label for="exampleInputEmail1">Data de lançamento da vaga</label>
                                    <input type="date"  id="Dt_lancamento" name="Dt_lancamento"  " >

                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area"   >Estado</>
                                  <option> </option>
                                  <option>TI/Informatica</option>
                                  <option>Saude</option>
                                  <option>Administração</option>
                                  <option>Educação</option>
                                  <option>Mecanica</option>
                                  <option>Engenharia</option>
                                  </select>
                                 </br></br>
                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>     
            </p>
          </div>

                       <?php
                       /**Lista das vagas */

                              $sql = " SELECT * from vagas where area like '%$Recebe_Area%' order by dt_lancamento DESC";

                              $resultado_id = mysqli_query($link, $sql);

        
                              while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              echo '<a href="#" class="list-group-item">';
                              echo '<h4 class="list-group-item-heading">'.$registro['titulo'].' <small> - '.$registro['area'].'</small></h4>';
                              echo '<p class="list-group-item-text"> Lançado em '.$registro['dt_lancamento'].' - '.$registro['estado'].' - '.$registro['pais'].'</p>';
                              echo '<p class="list-group-item-text"> Formação Requerida '.$registro['formacaoMinima'].'   Vaga cadastrada por '.$registro['emailRecrutador'].'</p>';
                              echo '</br></br> <p class="list-group-item-text">'.$registro['descricao'].'</p>';


                               echo '</a>';

 
                       ?>



          <div class="clearfix"></div>
        </div>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    </body>
</html>



                  <?php 

                  }//Fim do quinto if, se a area  não é vasio mas o resto é null   

            }else{ 
            


                 //sexto teste, definido uma data a partir de , e o resto null 
                 if (!empty($Recebe_Dt_lancamento)){

                 ?>


                  <!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo 10!</title>
        <!-- 
    

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




                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Area para recrutadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_cadastra_novaVaga.php">Cadastrar nova vaga</a></li>
                            <li><a href="">Buscar curriculos</a></li>
                          
                            </ul>
                            </li>

                            <li><a href="busca_vagas.php">Buscar Vagas</a></li>

                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_Curriculo.php">Curriculo</a></li>
                            <li><a href="altera_senha.php">Alterar tua senha</a></li>
                            <li><a href="editar_dados_cadastrais.php">Dados cadastrais</a></li>
                            <li><a href="pergunta_excluir.php">Excluir cadastro</a></li>
                            </ul>
                            </li>





                <li><a href="sair.php">Deslogar</a></li>
                <li class="">
                        <div class="col-md-12">

               </form>
                    </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

                                         
                    
           <div class="jumbotron">
            <h3>Listagem de vagas</h3>
            <p>
             <form  method="post"  id="BuscaVagas" name="BuscaVagas" align="center"  action="busca_vagas_listagem.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado">Estado</>
                                  <option> </option>
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>PR</option>
                                  <option>SP</option>
                                  <option>RJ</option>
                                  <option>Outro</option>
                                  </select>

                                  <label for="exampleInputEmail1">Pais</label>
                                  <select id="pais" name="pais" placeholder="pais"  >Estado</>
                                  <option> </option>
                                  <option>Brasil</option>
                                  <option>Argentina</option>
                                  <option>EUA</option>
                                  <option>Canada</option>
                                  <option>Mexico</option>
                                  </select>
                                   
                                   
                                    <label for="exampleInputEmail1">Data de lançamento da vaga</label>
                                    <input type="date"  id="Dt_lancamento" name="Dt_lancamento"  " >

                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area"   >Estado</>
                                  <option> </option>
                                  <option>TI/Informatica</option>
                                  <option>Saude</option>
                                  <option>Administração</option>
                                  <option>Educação</option>
                                  <option>Mecanica</option>
                                  <option>Engenharia</option>
                                  </select>
                                 </br></br>
                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>     
            </p>
          </div>

                       <?php
                       /**Lista das vagas */

                              $sql = " SELECT * from vagas where dt_lancamento >= '$Recebe_Dt_lancamento' order by dt_lancamento DESC";

                              $resultado_id = mysqli_query($link, $sql);

        
                              while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              echo '<a href="#" class="list-group-item">';
                              echo '<h4 class="list-group-item-heading">'.$registro['titulo'].' <small> - '.$registro['area'].'</small></h4>';
                              echo '<p class="list-group-item-text"> Lançado em '.$registro['dt_lancamento'].' - '.$registro['estado'].' - '.$registro['pais'].'</p>';
                              echo '<p class="list-group-item-text"> Formação Requerida '.$registro['formacaoMinima'].'   Vaga cadastrada por '.$registro['emailRecrutador'].'</p>';
                              echo '</br></br> <p class="list-group-item-text">'.$registro['descricao'].'</p>';


                               echo '</a>';

 
                       ?>



          <div class="clearfix"></div>
        </div>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    </body>
</html>




                  <?php 

                  }//Fim do sexto if, definido uma data a partir de , e o resto null   

            }else{ 
            

                   //setimo teste, titulo e formação minima preenchidos
                   /** if( ($a==1 || $a==2) && ($b==3 || $b==4) && ($c==5 || $c==6) ) {  */
                 if ((!empty($Recebe_Titulo)) && (!empty($Recebe_Formacao_Requerida))){


                 echo' teste de filtro com if , usado  duas condições';
                 ?>   
                  

                 

                  <?php 

                  }//Fim do setimo if ,  titulo e formação minima preenchidos

                  
            else{ 
             echo 'Opa filtro de pesquisa ainda não implementado. Vou resolver isto em breve. </br> Abraço.';

            }//Fim do primeiro else , se titulo não é vasio mas o resto é null  
            }//Fim do segundo else , se formação requeria não é vasio mas o resto é null  
            }//Fim do terceiro else, se estado não é vasio mas o resto é null
            }//Fim do quarto else, se pais  não é vasio mas o resto é null
            }//Fim do quinto else, se a area  não é vasio mas o resto é null
            }//Fim do sexto else,  se definido uma data a partir de , e o resto null
            }//Fim do setimo else,   titulo e formação minima preenchidos


 ?>