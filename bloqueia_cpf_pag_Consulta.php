<?php
 session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 
    $ControlaAcesso = $_SESSION['Controla_Acesso_ConsultaCurriculo'];


    $Recebe_CPF = $_POST['CPFCandidato'];
  //   $Recebe_IdadeInicio = $_POST['idadeInicio'];
  //   $Recebe_IdadeFinal = $_POST['idadeFinal'];
  
   /**  if (!empty($Recebe_Dt_lancamento)){*/
     
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();

                            

 
               if (strcasecmp($emailAdm,"Jefersonfire@gmail.com") == 0) {


            $sql="update usuarios set Controla_Acesso_ConsultaCurriculo ='N'  where CPF='$Recebe_CPF'";

            mysqli_query($link,$sql);
 
           // header('Location: monta_Pesquisa_ClientesDoSite.php');
?>


     <form  method="post"  id="BuscaCliente" name="BuscaCliente" align="center"  action="monta_Pesquisa_ClientesDoSite.php">
                         <input type="hidden" class="form-control" id="CPF" name="CPF" value="">
                         <input type="hidden" class="form-control" id="email" name="email" value="">
                         <input type="hidden" class="form-control" id="nome" name="nome" value="">
                         <input type="hidden" class="form-control" id=liberado"" name="liberado" value="">

                  <button type="submit" class="btn btn-primary form-control">Bloqueio Efetuado</button>
       </form>


       <?php           
              
               } else {
               header('Location: index.php');
               } 
?>