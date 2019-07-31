<?php
 session_start();
/** importando a classe de conexão com banco de dados */
require_once('db.class.php');
/** Varaveis globais do php reconhecem pelo name e não pelo id do objeto do imput */
 

/** Sempre usar metodo Post */
/** Recebendo os campos*/
$Recebe_Email = $_POST['email'];
$Recebe_senha = $_POST['senha'];
/** $Recebe_email = $_POST['email']; */

$objDb = new db();
$link = $objDb->conecta_mysql();


/** $sql="select usuario,senha from usuarios";  */

$sql="select * from usuarios where email='$Recebe_Email' and senha='$Recebe_senha'";
/** o resultado vem como informação de memoria e precisa ser convertido*/
$Resultado = mysqli_query($link,$sql);
/**  convertendo */
$Dados_Login = mysqli_fetch_array($Resultado);


 /**
                                                    A autenticação funciona da seguinte maneira.
                                                    Pesquisa se existem o usuario e senha com o select
                                                    Depois o php pega as credenciais num array, 
                                                    o comando isset serve para localizar dentro do array as informações
 */

if($Resultado){
               /**  var_dump($Dados_Login); */ 
               if (isset($Dados_Login['email'])){
               /** esta validando se tem registro dentro de usuario
               se retorna null cai no else
               */
               echo 'Usuario existe'; 
               $_SESSION['email']    = $Dados_Login['email'];
               $_SESSION['usuario']  = $Dados_Login['usuario'];
               $_SESSION['CPF']      = $Dados_Login['CPF'];
               $_SESSION['fone']     = $Dados_Login['fone'];
               $_SESSION['endereco'] = $Dados_Login['endereco'];
               $_SESSION['cep'] = $Dados_Login['cep'];
               $_SESSION['senha'] = $Dados_Login['senha'];
               $_SESSION['RG'] = $Dados_Login['RG'];
               $_SESSION['Controla_Acesso_ConsultaCurriculo'] = $Dados_Login['Controla_Acesso_ConsultaCurriculo'];
               $_SESSION['estado'] = $Dados_Login['estado'];
               $_SESSION['area']   = $Dados_Login['area'];
               $_SESSION['pais']   = $Dados_Login['pais'];

               $Teste_Email = $_SESSION['email'];
               if (strcasecmp($Teste_Email,"Jefersonfire@gmail.com") == 0) {
               header('Location: Home_Adm.php');
               } else {
               echo 'teste aqui deu erro ';
               header('Location: Home.php');
               }
              /** header('Location: Home.php');
               echo '</br>';
                
               	*/


               /** assim se isola as informações */
              
              /* 	$v1 = $Dados_Login['email'];
                echo $v1;

                echo '</br>';

               	$v2 = isset($Dados_Login['senha']);
                echo $v2;
                echo '</br>';

               	$v3 = isset($Dados_Login['usuario']);
                echo $v3;
                echo '</br>';

               	$v4 = isset($Dados_Login['cfp']);
                echo $v4;
              
                */
               
               }else{
               echo 'Usuario Não achado'; 
          	   /**  redirecionando pra outra pagina automatico, mas com parametro erro*/

   	           /**  header('Location: index.php?erro=1'); */
   	           header('Location: erro_logar.php');
               }

}else{
    /** echo 'Erro ao Logar! Problema de conexão com banco de dados'; */
    header('Location: erro_logar.php');
};

/**
if(mysqli_query($link,$sql)){
   echo 'Consulta efetuada com sucesso';
}else{
   echo 'erro ao consultar';
};



mysqli_query(conexão,Query);

create table usuarios (
       id int not null PRIMARY KEY AUTO_INCREMENT,
       usuario varchar(50)  not null,
       email   varchar(100) not null,
       senha   varchar(32)  not null
)

senha 32 por causa do esquema de criptografia

*/

?>