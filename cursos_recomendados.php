
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Curriculo 10!</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script>
        function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
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
 
       <p class="paragrafo">
        <label>LinkDin, Aprenda a Criar um Curriculo Campeão, como se comportar em entrevistas, dentre varias outras coisas.</label></br>
         <a href="https://bit.ly/2DgVffb">Clique e saiba mais</a>
        </br></br>
         <label>Que tal aprender um pouco sobre eletronica?</label></br>
         <a href="https://go.hotmart.com/Q10514129C">Clique e saiba mais</a>
       </p>

	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>