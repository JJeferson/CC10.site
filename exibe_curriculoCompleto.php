<?php
   session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 



   $Recebe_CPF = $_POST['CPFCandidato'];

  
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();
 

                         $sqlCurriculo="select * from curriculos where CPF='$Recebe_CPF'";
                         $resultado = mysqli_query($link, $sqlCurriculo);
                         $Dados_Curriculo = mysqli_fetch_array($resultado);

                      
                  ?>




<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo Super 10!</title>
      
    
         <style type="text/css">
           
           

           .paragrafo{
             
            font-size: 10px
            border-width: 2px 1px 2px 1px;
            border-color: blue orange blue orange;
            margin-right:8cm;
            margin-left:8cm;
            

           }

          
          </style> 
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
              <li><a href="Home.php">Voltar para Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

                                         
                    
           <div class="jumbotron">
              <h4 align="center">
               <?php
                echo $Dados_Curriculo['nome'];
               ?>
               </h4>
           </div>
               
           <p  align="center"> 
               <?php
                echo 'Email: '.$Dados_Curriculo['email'].' Endereço: '.$Dados_Curriculo['endereco'].'</br> Fone: '.$Dados_Curriculo['fone'];
                echo 'Estado: '.$Dados_Curriculo['estado'].'  </br>    '.$Dados_Curriculo['pais'];
                echo'</br></br>';
                echo 'Area de Atuação '.$Dados_Curriculo['area'].'        Formação :'.$Dados_Curriculo['formacao'];
               ?>
           </p>

               <p align="center" class="paragrafo">
               <?php
               echo  'Cursos e Formações:'.'</br></br></br>';
               echo  $Dados_Curriculo['cursos'];
               echo  '</br></br>'
               ?>

               </p>



                <h3 align="center">
                   Experiencias
               </h3>
              </br></br>
              <p align="center">//----------------------------------------------------------//</p>
              <p align="center" class="paragrafo"> 
               <?php
               echo  'Emprego atual?   '.$Dados_Curriculo['emprego_atual'].'</br></br>';
               echo  'Data de inicio:   '.$Dados_Curriculo['dt_inicio_ex1'].'</br>';
               echo  'Data de saida:   '.$Dados_Curriculo['dt_final_ex1'].'</br>';
               echo  'Descrição das atividades:'.'</br></br>';
              
               echo  $Dados_Curriculo['ex1'];
               ?>
              </p>

              <h4 align="center" > Anterior </h4>
               <p align="center"  class="paragrafo"> 

               
               <?php
               
               echo  'Data de inicio:   '.$Dados_Curriculo['dt_inicio_ex2'].'</br>';
               echo  'Data de saida:   '.$Dados_Curriculo['dt_final_ex2'].'</br>';
               echo  'Descrição das atividades:'.'</br></br>';
              
               echo  $Dados_Curriculo['ex2'];
               ?>
              </p>
                <h4 align="center" > Anterior </h4>
              <p align="center" class="paragrafo"> 

               <?php
               
               echo  'Data de inicio:   '.$Dados_Curriculo['dt_inicio_ex3'].'</br>';
               echo  'Data de saida:   '.$Dados_Curriculo['dt_final_ex3'].'</br>';
               echo  'Descrição das atividades:'.'</br></br>';
              
               echo  $Dados_Curriculo['ex3'];
               ?>
              </p>
  </br></br>


    </body>
    </html>
