 
<?php
   
    session_start();


    $Teste_Email = $_SESSION['email'];
               if (strcasecmp($Teste_Email,"Jefersonfire@gmail.com") == 0) {
               header('Location: Home_Adm.php');
               } else {
              
                /**  
                CcSuper10.life



                */
  
     
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

	    	    <br />
            
                <br />
                <?php    

              	$v1 = $_SESSION['email'];
                echo '<h3>Logado como '.$v1.'</h3>';
                /** se concatena o PHP com o html no ECHO usando ponto */
                 ?>



	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo Curriculo Super 10 !</h1>
	        <p>Seja bem vindo 

                        <?php    

              	        $v1 = $_SESSION['usuario'];
                        echo $v1;
                        ?>
               aqui no Curriculo Super 10 você pode cadastrar teu curriculo, buscar por vagas, ou ainda cadastrar vagas, tudo gratuitamente.
               É um recurso a mais para ajudar profissional e empregador a se encontrar. </br>
               Abraço e boa sorte!          

	        </p>
	      </div>



	       <div class="jumbotron">
	        <h3>Dica!</h3>
	        <p>
             Ei! Precisando de uma ajuda para conseguir um emprego?</br>
             Que tal conhecer nossa pagina de  <a href="cursos_recomendados.php"   ">cursos recomendados</a> ?</br>
</br>
             Abração e boa sorte. 	</br>
	        </p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>

<?php
   /** controle de segurança para redirecionamentos*/
    
                 } 
     
?> 