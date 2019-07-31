<?php
   
    session_start();
/** importando a classe de conexão com banco de dados */
   require_once('db.class.php');
/** Varaveis globais do php reconhecem pelo name e não pelo id do objeto do imput */
 

/** Sempre usar metodo Post */
/** Recebendo os campos*/
$Recebe_Titulo= $_POST['titulo'];
$Recebe_Formacao_Requerida = $_POST['formacaoRequerida']; 
$Recebe_Dt_lancamento = $_POST['Dt_lancamento'];
$Recebe_Area = $_POST['area'];
$Recebe_Estado = $_POST['estado']; 
$Recebe_Pais = $_POST['pais']; 
$Recebe_Desc = $_POST['desc']; 

$emailRecrutador = $_SESSION['email'];
$CPFRecrutador   = $_SESSION['CPF'];
$RGRecrutador    = $_SESSION['RG']; 

/**
    emailRecrutador     varchar(100) not null UNIQUE,
       RGRecrutador        VARCHAR(100) NOT NULL UNIQUE, 
       CPFRecrutador       VARCHAR(100) NOT NULL UNIQUE, 
       
       titulo              varchar(50)  not null,
       formacaoMinima      VARCHAR(100),
       dt_lancamento               DATE,
       area               VARCHAR(100) NOT NULL, 
       descricao          VARCHAR(5000),

*/

       $sqlVagas="Insert into vagas(emailRecrutador,RGRecrutador,CPFRecrutador,estado,pais,titulo,formacaoMinima,dt_lancamento,area,descricao ) values('$emailRecrutador','$RGRecrutador','$CPFRecrutador','$Recebe_Estado','$Recebe_Pais','$Recebe_Titulo','$Recebe_Formacao_Requerida','$Recebe_Dt_lancamento','$Recebe_Area','$Recebe_Desc')";


$objDb = new db();
$link = $objDb->conecta_mysql();

mysqli_query($link,$sqlVagas);

 echo' <a href="Home.php" class="btn btn-primary">Vaga Cadastrada com Sucesso!</a>';


?>