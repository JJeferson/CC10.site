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
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Ajuste seus dados</h3>
	    		<br />
	    		<!--Post é o metodo o action é pra onde vai mandar o formulario -->
	    		<!--SEMPRE USAR POST, JAMAIS GET -->
				<form method="post" action="grava_anteracoes_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="nome" value="<?php
              	        $nome = $_SESSION['usuario'];
                        echo $nome;
                        ?>" name="nome" placeholder="nome" required="requiored">
					</div>

				
					 
					
                             <h4>RG</h4>
                             <div class="form-group">
                             <input type="text" class="form-control" onkeyup="somenteNumeros(this);" id="rg" value="<?php
              	             $RG = $_SESSION['RG'];
                             echo $RG;
                             ?>" name="rg" placeholder="rg" maxlength="20" required="requiored">
                             </div>
                             <h4>CPF</h4>
                             <div class="form-group">
                             <input type="text" class="form-control" id="cpf" value="<?php
              	             $CPF = $_SESSION['CPF'];
                             echo $CPF;
                             ?>"name="cpf" placeholder="cpf" onkeyup="somenteNumeros(this);" maxlength="20" required="requiored">
                             <h4>Endereço</h4>
                             </div>
                             <div class="form-group">
                             <input type="text" class="form-control" id="endereco" value="<?php
              	             $endereco = $_SESSION['endereco'];
                             echo $endereco;
                             ?>"name="endereco" placeholder="endereco" maxlength="50" required="requiored">
                             </div>
                             <h4>CEP</h4>
                             <div class="form-group">
                             <input type="number" class="form-control" id="cep" maxlength="20" onkeyup="somenteNumeros(this);" value="<?php
              	             $cep = $_SESSION['cep'];
                             echo $cep;
                             ?>"name="cep" placeholder="cep" required="requiored">
                             </div>
                             <h4>Fone</h4>
                             <div class="form-group">
                             <input type="text" class="form-control" maxlength="20" onkeyup="somenteNumeros(this);" id="fone" 
                             value="<?php
              	             $fone = $_SESSION['fone'];
                             echo $fone;
                             ?>"name="fone" placeholder="fone" required="requiored">
                             </div>


                                  <h5>Estados</h5>
                                  <select id="estado" name="estado" placeholder="estado" required="requiored" >Estado</>
                                  <option><?php
              	                  $estado = $_SESSION['estado'];
                                  echo $estado;
                                  ?></option>
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
                                  </br>
                                  </br>
                                  <!-- ------------------------------------------------------ -->
                                  <h5>Pais</h5>
                                 
                                  <select id="pais" name="pais" placeholder="pais" required="requiored" >Estado</>
                                  <option><?php
              	                  $pais = $_SESSION['pais'];
                                  echo $pais;
                                  ?></option>
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
                                  </br>
                                  </br>
                                  <!-- ------------------------------------------------------ -->
                                  <h5>Area de Atuação</h5>
                                 
                                  <select id="area" name="area" placeholder="area" required="requiored" >Estado</>
                                  <option><?php
              	                  $area = $_SESSION['area'];
                                  echo $area;
                                  ?></option>
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
                                  </br>
                                  <!-- ------------------------------------------------------ -->

                             
                    
					<button type="submit" class="btn btn-primary form-control">Gravar Alterações</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>