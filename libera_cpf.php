<?php
   
    session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 

     $Recebe_CPF = $_POST['CPF'];
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();
     
   
   


     $sql="update usuarios set Controla_Acesso_ConsultaCurriculo ='SIM'  where CPF='$Recebe_CPF'";

     mysqli_query($link,$sql);
 
     header('Location: Home_Adm.php');


     /*
     if (strcasecmp($emailAdm,"Jefersonfire@gmail.com") == 0) {
    


    } else {
     echo 'teste aqui deu erro ';
    
   */
?>  

