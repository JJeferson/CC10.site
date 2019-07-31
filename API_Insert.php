<?php

/** importando a classe de conexão com banco de dados */
require_once('db.class.php');
$Recebe_nome = $_GET['nome'];
$Recebe_email = $_GET['email'];


$objDb = new db();
$link = $objDb->conecta_mysql();

 /** $sql="Insert into usuarios(usuario,email,senha) values('$Recebe_usuario','$Recebe_email','$Recebe_senha')"; */

$sql="Insert into usuarios(usuario,email,senha,RG,CPF,endereco,estado,pais,area,cep,fone,Controla_Acesso_ConsultaCurriculo) values('$Recebe_nome','$Recebe_email','Teste_deAPI','Teste_deAPI','Teste_deAPI','Teste_deAPI','Teste_deAPI','Teste_deAPI','Teste_deAPI','Teste_deAPI','Teste_deAPI','N')";

$sqlCurriculo="Insert into curriculos(nome,email,RG,CPF,endereco,estado,pais,area,cep,fone,emprego_atual,idade,formacao,cursos,dt_inicio_ex1,dt_final_ex1,ex1,dt_inicio_ex2,dt_final_ex2,ex2,dt_inicio_ex3,dt_final_ex3,ex3) values('$Recebe_nome','$Recebe_email','Teste_deAPI','$Recebe_CPF','$Recebe_endereco','$Recebe_estado','$Recebe_pais','$Recebe_area','$Recebe_cep','$Recebe_fone',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ')";


if(mysqli_query($link,$sql))
{
	 mysqli_query($link,$sqlCurriculo);
     echo "successo!";
}
else
{
     echo "falha";
}

mysqli_close($conexao);

?>