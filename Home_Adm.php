<?php
   /**  
    Não perder https://hospedameusite.com.br/


     GoDaddy
     https://br.godaddy.com
     Loguei lá com Facebook.
     cc10.site



localhost:3306
senha do banco de dados 
0047%355jefer
nome do banco jeferfire_
localhost:3306


    acesso: https://vps202288.battlecloud.club:8443
    usuário: jeferfire
    senha: oaE0y3?9
   */
    session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 
    $ControlaAcesso = $_SESSION['Controla_Acesso_ConsultaCurriculo'];
     
    if (strcasecmp($emailAdm,"Jefersonfire@gmail.com") == 0) {



     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();
     
   
   


     $sql_Numero_de_cadastrados= "SELECT count(cpf) FROM usuarios";

     $ResultadoNumerodeCurriculos = mysqli_query($link,$sql_Numero_de_cadastrados);
     /**  convertendo */
     $Dados_Count = mysqli_fetch_array($ResultadoNumerodeCurriculos);
     $Numero_de_Curriculos = $Dados_Count['count(cpf)'];



       $sql_Numero_de_Vagas_dcadastrados= "SELECT count(CPFRecrutador) FROM vagas";

     $ResultadoNumerodeVagas = mysqli_query($link,$sql_Numero_de_Vagas_dcadastrados);
     /**  convertendo */
     $Dados_Count_Vagas = mysqli_fetch_array($ResultadoNumerodeVagas);
     $Numero_de_Vagas = $Dados_Count_Vagas['count(CPFRecrutador)'];
    


    
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




                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Area para recrutadores<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="formulario_cadastra_novaVaga.php">Cadastrar nova vaga</a></li>
                            <li><a href="busca_curriculos.php">Buscar curriculos</a></li>
                          
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


	    <div class="container">

	    	  


	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo Curriculo Super 10 !</h1>
	        <p>Logado como  

                        <?php    

              	        $v1 = $_SESSION['usuario'];
                        echo $v1;
                        ?> Conta Adminitrador do Site.
                    </br>
                    </br>
                    Numero de curriculos cadastrados 
                     <?php 
                     echo  $Numero_de_Curriculos;
                     ?> </br>

                     Numero de Vagas Cadastradas
                     <?php 
                     echo  $Numero_de_Vagas;
                     ?>

	        </p>
	      </div>



	       <div class="jumbotron">
	        <h3>Painel de Liberação</h3>
	        <p>

	         <form  method="post"  id="liberaCPF" name="liberaCPF" align="center"  action="libera_cpf.php">
	         <input type="text" class="form-control" id="CPF" name="CPF" placeholder="Liberar CPF" required="requiored">
             <button type="submit" class="btn btn-default" id="Grava"   >Liberar</button>
	         </form>	


             <form  method="post"  id="bloqueiaCPF" name="bloqueiaCPF" align="center"  action="bloqueia_cpf.php">
	         <input type="text" class="form-control" id="CPF" name="CPF" placeholder="Bloquear  CPF" required="requiored">
             <button type="submit" class="btn btn-default" id="Grava"   >Bloquear</button>
	         </form>
</br>
             <form  method="post"  id="bloqueiaCPF" name="bloqueiaCPF" align="center"  action="lista_Liberados.php">
	         <button href="lista_Liberados.php" class="btn btn-default" id="lista_liberados"   >Consulta Clientes do Site </button>
             </form>
       


	        </p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>

<?php

   } else {
     echo 'teste aqui deu erro ';
     header('Location: index.php');
    }
  

  
?> 