<?php
 session_start();
/** importando a classe de conexão com banco de dados */
require_once('db.class.php');
/** Varaveis globais do php reconhecem pelo name e não pelo id do objeto do imput */
  

/** Sempre usar metodo Post */
/** Recebendo os campos*/
$Recebe_nome = $_POST['nome'];
$Recebe_RG  = $_POST['rg'];
$Recebe_CPF = $_POST['cpf'];
$Recebe_endereco = $_POST['endereco'];
$Recebe_estado = $_POST['estado'];
$Recebe_pais = $_POST['pais'];
$Recebe_area = $_POST['area'];
$Recebe_cep = $_POST['cep'];
$Recebe_fone = $_POST['fone'];

$objDb = new db();
$link = $objDb->conecta_mysql();

 
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];

 /** $sql="Insert into usuarios(usuario,email,senha) values('$Recebe_usuario','$Recebe_email','$Recebe_senha')"; 
update usuarios set usuario= RG= CPF= endereco= estado= pais= area= cep= fone= where email=
header('Location: Home.php');

update usuarios set usuario=Recebe_nome RG=Recebe_RG CPF=Recebe_CPF endereco=Recebe_endereco estado=Recebe_estado pais=Recebe_pais area=Recebe_area cep=Recebe_cep fone=Recebe_fone where email=email


update usuarios set CPF='00001'where email='efersonfire@gmail.com'


 */

$sql="update usuarios set usuario='$Recebe_nome', RG='$Recebe_RG', CPF='$Recebe_CPF', endereco='$Recebe_endereco', estado='$Recebe_estado', pais='$Recebe_pais', area='$Recebe_area', cep='$Recebe_cep', fone='$Recebe_fone' where email='$email' and senha='$senha'";

$sqlCurriculo="update curriculos set nome='$Recebe_nome', RG='$Recebe_RG', CPF='$Recebe_CPF', endereco='$Recebe_endereco', estado='$Recebe_estado', pais='$Recebe_pais', area='$Recebe_area', cep='$Recebe_cep', fone='$Recebe_fone' where email='$email'";


if(mysqli_query($link,$sql)){
  mysqli_query($link,$sqlCurriculo);
   echo 'Cadastro ALTERADO com sucesso';
  ?>
                 <!DOCTYPE HTML>
                 <html lang="pt-br">
                 <head>
                 <meta charset="UTF-8">

                  <title>Curriculo Super 10!</title>
                  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    
                   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                   <link rel="icon" href="imagens/Ico.png">
     
                   </head>

                   <body>

                    </br></br></br></br></br></br>
                    <a href="Home.php" class="btn btn-primary">Voltar ao Home</a>
    
                    </body>
                    </html>




<?php
                        $sql="select * from usuarios where email='$email' and senha='$senha'";
                       /** o resultado vem como informação de memoria e precisa ser convertido*/
                        $Resultado = mysqli_query($link,$sql);
                       /**  convertendo */
                        $Dados_Login = mysqli_fetch_array($Resultado);
 

               $_SESSION['usuario']  = $Dados_Login['usuario'];
               $_SESSION['CPF']      = $Dados_Login['CPF'];
               $_SESSION['fone']     = $Dados_Login['fone'];
               $_SESSION['endereco'] = $Dados_Login['endereco'];
               $_SESSION['cep'] = $Dados_Login['cep'];
               $_SESSION['RG'] = $Dados_Login['RG'];
               $_SESSION['estado'] = $Dados_Login['estado'];
               $_SESSION['area']   = $Dados_Login['area'];
               $_SESSION['pais']   = $Dados_Login['pais'];

   
}else{
     echo 'erro ao gravar, avise ao ADM do site. Jefersonfire@gamil.com, envie junto print do erro.';
     echo '</br></br></br>';
     echo '<a href="Home.php" class="btn btn-primary">Voltar ao Home</a>';
};
?>


