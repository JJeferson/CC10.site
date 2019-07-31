<?php
   
    session_start();
  
     
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
	        <h1>Opa, e ai!</h1>
	        <p>

                        <?php    

              	        $v1 = $_SESSION['usuario'];
                        echo $v1;
                        ?>
                        tem certeza mesmo que quer excluir teu cadastro?</br>
                        lembre-se que se clicar em sim, não dá para reativar teu cadastro, se quiser voltar, terá de efetuar teu cadastro do zero novamente.</br>
                        Então tem certeza disto?</br>
                        <a href="excluir.php" class="btn btn-primary">Sim, quero excluir meu cadastro!</a>
                        <a href="Home.php" class="btn btn-primary">Não, irei manter meu curriculo aqui.</a>   
           </br>
                    

	        </p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>