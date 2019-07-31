<?php

    session_start();

    

    echo 'Cadastro apagado com sucesso!';


require_once('db.class.php');


$objDb = new db();
$link = $objDb->conecta_mysql();

$Email=$_SESSION['email'];
$CPF=$_SESSION['CPF'];
$senha=$_SESSION['senha'];

/** $sql="select usuario,senha from usuarios";  */

$sql="delete  from usuarios where email='$Email' and senha='$senha'";
mysqli_query($link,$sql);

$sqlCurriculos="delete  from curriculos where email='$Email' and CPF='$CPF'";
mysqli_query($link,$sqlCurriculos);

    	
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
    unset($_SESSION['usuario']);
    unset($_SESSION['CPF']);       
    unset($_SESSION['fone']);     
    unset($_SESSION['endereco']);  
    unset($_SESSION['RG']);  
    unset($_SESSION['Controla_Acesso_ConsultaCurriculo']);
    unset($_SESSION['estado']);
    unset($_SESSION['area']);    
    unset($_SESSION['pais']);


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

</br>
</br>
</br>
</br>
</br>
</br>
<a href="index.php" class="btn btn-primary">Voltar ao Home</a>
		
	</body>
</html>