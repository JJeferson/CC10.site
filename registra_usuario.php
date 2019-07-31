<?php

/** importando a classe de conexão com banco de dados */
require_once('db.class.php');
/** Varaveis globais do php reconhecem pelo name e não pelo id do objeto do imput */
  

/** Sempre usar metodo Post */
/** Recebendo os campos*/
$Recebe_nome = $_POST['nome'];
$Recebe_senha = $_POST['senha'];
$Recebe_email = $_POST['email'];
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

 /** $sql="Insert into usuarios(usuario,email,senha) values('$Recebe_usuario','$Recebe_email','$Recebe_senha')"; */

$sql="Insert into usuarios(usuario,email,senha,RG,CPF,endereco,estado,pais,area,cep,fone,Controla_Acesso_ConsultaCurriculo) values('$Recebe_nome','$Recebe_email','$Recebe_senha','$Recebe_RG','$Recebe_CPF','$Recebe_endereco','$Recebe_estado','$Recebe_pais','$Recebe_area','$Recebe_cep','$Recebe_fone','N')";

$sqlCurriculo="Insert into curriculos(nome,email,RG,CPF,endereco,estado,pais,area,cep,fone,emprego_atual,idade,formacao,cursos,dt_inicio_ex1,dt_final_ex1,ex1,dt_inicio_ex2,dt_final_ex2,ex2,dt_inicio_ex3,dt_final_ex3,ex3) values('$Recebe_nome','$Recebe_email','$Recebe_RG','$Recebe_CPF','$Recebe_endereco','$Recebe_estado','$Recebe_pais','$Recebe_area','$Recebe_cep','$Recebe_fone',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ')";


if(mysqli_query($link,$sql)){
   echo 'Cadastro efetuado com sucesso';
   mysqli_query($link,$sqlCurriculo);
   header('Location: index.php');
}else{
   echo 'Erro ao cadastrar novo Login.';
   echo '</br>';
   echo 'Usuario ou CPF/RG Já cadastrados. Envie email ao ADM caso precise de ajuda. No email envie o RG, CPF e o email de login. Receberá uma nova senha para logar.';
   echo '</br>';
   echo 'jefersonfire@gmail.com';
    echo '</br>';
   echo' <a href="index.php" class="btn btn-primary">Voltar ao Home</a>';
  
};

/**

mysqli_query(conexão,Query);

create table usuarios (
       id int not null PRIMARY KEY AUTO_INCREMENT,
       usuario varchar(50)  not null,
       email   varchar(100) not null,
       senha   varchar(32)  not null

)

senha 32 por causa do esquema de criptografia



create table usuarios (
       id int not null PRIMARY KEY AUTO_INCREMENT,
       usuario   varchar(50)  not null,
       email     varchar(100) not null UNIQUE,
       senha     varchar(32)  not null,
       RG        VARCHAR(100) NOT NULL UNIQUE, 
       CPF       VARCHAR(100) NOT NULL UNIQUE, 
       endereco  VARCHAR(100) NOT NULL, 
       estado    VARCHAR(100) NOT NULL, 
       pais      VARCHAR(100) NOT NULL,
       area      VARCHAR(100) NOT NULL, 
       cep       VARCHAR(100) NOT NULL, 
       fone      VARCHAR(100) NOT NULL,
       Controla_Acesso_ConsultaCurriculo VARCHAR(100) NOT NULL
)


*/

?>