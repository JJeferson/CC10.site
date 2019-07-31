<?php

    session_start();

    unset($_SESSION['senha']);


    require_once('db.class.php');


    $Recebe_senha = $_POST['altera_senha'];
    $Seta_CPF= $_SESSION['CPF'];
    $Seta_email= $_SESSION['email'];

   $objDb = new db();
   $link = $objDb->conecta_mysql();


   $sql="update usuarios set senha='$Recebe_senha' where email='$Seta_email' and CPF='$Seta_CPF'";

   mysqli_query($link,$sql);



     $_SESSION['senha']  = $Recebe_senha; 

  ?>
                 <!DOCTYPE HTML>
                 <html lang="pt-br">
                 <head>
                 <meta charset="UTF-8">

                  <title>Curriculo Super 10!</title>
                  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
                  <h2>Senha alterada com sucesso.</h2>

    
                   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                   <link rel="icon" href="imagens/Ico.png">
     
                   </head>

                   <body>

                    </br></br></br></br></br></br>
                    <a href="Home.php" class="btn btn-primary">Voltar ao Home</a>
    
                    </body>
                    </html>



