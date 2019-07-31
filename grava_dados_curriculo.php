<?php
   
    session_start();
/** importando a classe de conexão com banco de dados */
   require_once('db.class.php');
/** Varaveis globais do php reconhecem pelo name e não pelo id do objeto do imput */
 

/** Sempre usar metodo Post */
/** Recebendo os campos*/
$Recebe_Idade = $_POST['idade'];
$Recebe_Formacao = $_POST['formacao']; 
$Recebe_Cursos = $_POST['cursos'];
$Recebe_Emprego_Atual = $_POST['emprego_atual'];

$Recebe_Dt_inicio1 = $_POST['Dt_inicio1'];
$Recebe_Dt_fim1 = $_POST['Dt_fim1'];
$Recebe_EXP1 = $_POST['exp1'];

$Recebe_Dt_inicio2 = $_POST['Dt_inicio2'];
$Recebe_Dt_fim2 = $_POST['Dt_fim2'];
$Recebe_EXP2 = $_POST['exp2'];

$Recebe_Dt_inicio3 = $_POST['Dt_inicio3'];
$Recebe_Dt_fim3 = $_POST['Dt_fim3'];
$Recebe_EXP3 = $_POST['exp3'];


$email = $_SESSION['email'];
$CPF = $_SESSION['CPF'];

/***

create table curriculos (
       id int not null PRIMARY KEY AUTO_INCREMENT,
       nome   varchar(50)  not null,
       email     varchar(100) not null UNIQUE,
       RG        VARCHAR(100) NOT NULL UNIQUE, 
       CPF       VARCHAR(100) NOT NULL UNIQUE, 
       endereco  VARCHAR(100) NOT NULL, 
       estado    VARCHAR(100) NOT NULL, 
       pais      VARCHAR(100) NOT NULL,
       area      VARCHAR(100) NOT NULL, 
       cep       VARCHAR(100) NOT NULL, 
       fone      VARCHAR(100) NOT NULL,
       
       emprego_atual    VARCHAR(100),  
       idade     VARCHAR(100),
       formacao  VARCHAR(100),
       cursos    VARCHAR(100),
       dt_inicio_ex1 DATE,
       dt_final_ex1  DATE,
       ex1      VARCHAR(5000),

       dt_inicio_ex2 DATE,
       dt_final_ex2  DATE,
       ex2      VARCHAR(5000),
       
       dt_inicio_ex3 DATE,
       dt_final_ex3  DATE,
       ex3      VARCHAR(5000)

)
*/
$sqlCurriculo="update curriculos set emprego_atual='$Recebe_Emprego_Atual', idade='$Recebe_Idade', formacao='$Recebe_Formacao', cursos='$Recebe_Cursos', dt_inicio_ex1='$Recebe_Dt_inicio1', dt_final_ex1='$Recebe_Dt_fim1', ex1='$Recebe_EXP1',dt_inicio_ex2='$Recebe_Dt_inicio2', dt_final_ex2='$Recebe_Dt_fim2', ex2='$Recebe_EXP2',dt_inicio_ex3='$Recebe_Dt_inicio3', dt_final_ex3='$Recebe_Dt_fim3', ex3='$Recebe_EXP3' where email='$email' and CPF='$CPF'";


$objDb = new db();
$link = $objDb->conecta_mysql();

mysqli_query($link,$sqlCurriculo);

 echo' <a href="Home.php" class="btn btn-primary">Voltar ao Home</a>';

/*
if(mysqli_query($link,$sqlCurriculo)){
   echo 'Gravado  com sucesso';
    
}else{
   echo 'Erro ao Gravar curriculo';
   echo '</br>';
   echo 'Usuario ou CPF/RG Já cadastrados. Envie email ao ADM caso precise de ajuda. No email envie o RG, CPF e o email de login. Receberá uma nova senha para logar.';
   echo '</br>';
   echo 'jefersonfire@gmail.com';
    echo '</br>';
   echo' <a href="index.php" class="btn btn-primary">Voltar ao Home</a>';

*/
?>