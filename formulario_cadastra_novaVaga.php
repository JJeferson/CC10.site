<?php
   
    session_start();
     $Seta_Nome= $_SESSION['usuario'];
     $Seta_CPF= $_SESSION['CPF'];
     $Seta_email= $_SESSION['email'];
     $Seta_endereco= $_SESSION['endereco'];
     $Seta_estado= $_SESSION['estado'];
     $Seta_area= $_SESSION['area'];
     $Seta_pais= $_SESSION['pais'];

?> 

<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Curriculo Super 10!</title>
    
    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

             <script>
      
              function limite_textarea(valor) {
               quant = 1000;
               total = valor.length;
               if(total <= quant) {
               resto = quant - total;
               document.getElementById('cont').innerHTML = resto;
               } else {
               document.getElementById('texto').value = valor.substr(0,quant);
               } 
               } 
              </script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
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


      <div class="container">
        
               <!-- Parametros do formulario, como o action por aqui no form -->

               <form  method="post"  id="cadVagas" name="cadVagas" align="center"  action="insereVaga.php">
               <br>
               <br> 
               <br> 
               <br> 
               <br> 
               <h2 align="center"> Cadastro de novas vagas</h2>


               <h4 align="center" >  Bem vindo  
               <?php         
                echo $Seta_Nome;
               ?>
               </h4> </br>
                                            
                                            <h4 align="center">
                                              Alguns teus dados:
                                              <?php     
                                              echo '</br>';
                                              ?>
                                              CPF:
                                              <?php     

                                               echo $Seta_CPF;
                                              ?>
                                                , Endereço: 
                                               <?php         
                                               
                                               echo $Seta_endereco ;
                                               echo '  ,   ';
                                               echo $Seta_estado;
                                               echo '  ,   ';
                                               echo $Seta_pais;
                                               echo '  ,  area de atuação:   ';
                                               echo $Seta_area;
                                              ?>
                                            </h4>  
               </br></br>  
                                            <div class="form-group">
                                          
               
               </div>
 
                                   <h3 align="center">Nova Vaga</h3>


                                   </br></br>
            <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" maxlength="50"placeholder="Titulo da Vaga" required="requiored">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida" required="requiored">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado" required="requiored" >Estado</>
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
                                  <select id="pais" name="pais" placeholder="pais" required="requiored" >Estado</>
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
                                    <input type="date"  id="Dt_lancamento" name="Dt_lancamento" required="requiored" " >

                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area" required="requiored" >Estado</>
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

                                    <div class="form-group">
                                    <label for="comment">Descrição</label>
                                    <span id="cont">3000</span> Restantes <br>
                                    <textarea class="form-control" onkeyup="limite_textarea(this.value)" rows="10" id="desc" name="desc" maxlength="3000" required="requiored">           
                                    </textarea>





                                    </div>


               <button type="submit" class="btn btn-default" id="Grava"   >Grava  </button>
               

               </div>



               </form>

             

               <br> 
               <br> 
               <br> 
               
               </div>
               </form>

            


</div>
<!-- MArco zero -->
      <!-- FOOTER -->
      <footer>
      
      </footer>

    

    
  </body>
</html>
