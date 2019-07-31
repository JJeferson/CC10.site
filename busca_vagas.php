<?php
   
    session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 

     
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();
     /*
     
   $sql="select * from vagas";
   
   $Resultado = mysqli_query($link,$sql);
   /**  convertendo 
   $total = mysql_num_rows($dados);
 
   $Dados_Tabela = mysql_fetch_assoc($Resultado);





                          $sql="select * from vagas";
                          echo "<table>";
                          while($exibe = mysql_fetch_assoc($sql)){
                          echo "<tr><td>Titulo:</td>";
                          echo "<td>".$exibe["titulo"]."</td></tr>";
                          }
                          echo "</table>";

  */

 

                          $Data_MenosDias =  date('d/m/Y', strtotime('-150 days'));
                          $Data_MenosDiasSQL =  date('Y/m/d', strtotime('-150 days'));
 
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

    <style type="text/css">
           
           

           .paragrafo{
             
            font-size: 10px
            border-width: 2px 1px 2px 1px;
            border-color: blue orange blue orange;
            margin-right:8cm;
            margin-left:8cm;
            

           }

          
          </style> 
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
	 
	       
            <p>
             <form  method="post"  id="BuscaVagas" name="BuscaVagas" align="center"  action="monta_busca_2.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga">
            </div>                </br>
                                   
                                            
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
                                    <input type="date"    id="Dt_lancamento" name="Dt_lancamento"  " >

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
                                 </br>
                                 <label> Lançamentos a partir de <?php echo $Data_MenosDias;?> </label>
                                 </br>
                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>  	
	        </p>
	      </div>
              
                       <?php
                       /**Lista das vagas */

                         $sql = " SELECT * from vagas ";
                         $sql.= " where  dt_lancamento >= '$Data_MenosDiasSQL' order by dt_lancamento DESC";

                         $resultado_id = mysqli_query($link, $sql);

        
		                while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
		               	echo '<a href="#" class="list-group-item">';
			            	echo '<h4 class="list-group-item-heading">'.$registro['titulo'].' <small> - '.$registro['area'].'</small></h4>';
			            	echo '<p class="list-group-item-text"> Lançado em '.$registro['dt_lancamento'].' - '.$registro['estado'].' - '.$registro['pais'].'</p>';
			              echo '<p class="list-group-item-text"> Formação Requerida '.$registro['formacaoMinima'].'   Vaga cadastrada por '.$registro['emailRecrutador'].'</p>';
			              echo '</br></br> <p class="list-group-item-text">'.$registro['descricao'].'</p>';


			            echo '</a>';
		               }
 
 
                       ?>


               
	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>