<?php

 /**  
    Não perder https://hospedameusite.com.br/
   */

/**   Os inserts na usuarios e na curriculos devem ocorrer na hora do cadastro.
Depois disso na hora do real cadastro dos dados cadastrais será apenas um update tornando assim mais simples
o processo pro site. 
Então todo o usuario cadastrado obrigatóriamente terá um curriculo cadastrado

Ainda estou em duvida sobre a criação destes campos auxiliares... se os crio ou não...
Esse mySQL do PhP my Admin tá me dando medo e nervos.



SELECT count(cpf) FROM `usuarios`


*/
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


sql="Insert into usuarios(usuario,email,senha,RG,CPF,endereco,estado,pais,area,cep,fone,Controla_Acesso_ConsultaCurriculo) values('$Recebe_nome','$Recebe_email','$Recebe_senha','$Recebe_RG','$Recebe_CPF','$Recebe_endereco','$Recebe_estado','$Recebe_pais','$Recebe_area','$Recebe_cep','$Recebe_fone','N')";


/** campo emprego atual é pra filtrar se pessoa ainda trabalhando ou se desempregada*/
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
       cursos    VARCHAR(5000),
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


sql="Insert into curriculos(nome,email,RG,CPF,endereco,estado,pais,area,cep,fone,emprego_atual,idade,formacao,cursos,dt_inicio_ex1,dt_final_ex1,ex1,dt_inicio_ex2,dt_final_ex2,ex2,dt_inicio_ex3,dt_final_ex3,ex3) values('$Recebe_nome','$Recebe_email','$Recebe_RG','$Recebe_CPF','$Recebe_endereco','$Recebe_estado','$Recebe_pais','$Recebe_area','$Recebe_cep','$Recebe_fone',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ')";


/** Tabela informes será para passar informes na pagina principal.
    Criar uma pagina principal do ADM inde informarei diretamente sempre por ali.
    O troço pode ser um select * mesmo.
    Vou ter um botão delete para apagar a tabela e um inserir para inserir.
  */


    create table informes (
       id int not null PRIMARY KEY AUTO_INCREMENT,
       informe     VARCHAR(5000) NOT NULL
       )
       

//**                                                                                                */

       create table vagas(
       id int not null PRIMARY KEY AUTO_INCREMENT,
       
       emailRecrutador     varchar(100) not null ,
       RGRecrutador        VARCHAR(100) NOT NULL , 
       CPFRecrutador       VARCHAR(100) NOT NULL, 
       
       estado              varchar(50)  not null,
       pais                varchar(50)  not null,
       titulo              varchar(50)  not null,
       formacaoMinima      VARCHAR(100),
       dt_lancamento               DATE,
       area               VARCHAR(100) NOT NULL, 
       descricao          VARCHAR(5000)
 )

       $sqlVagas="Insert into vagas(emailRecrutador,RGRecrutador,CPFRecrutador,estado,pais,titulo,formacaoMinima,dt_lancamento,area,descricao ) values('$emailRecrutador','$RGRecrutador','$CPFRecrutador','$Recebe_Estado','$Recebe_Pais','$Recebe_Titulo','$Recebe_Formacao_Requerida','$Recebe_Dt_lancamento','$Recebe_Area','$Recebe_Desc')";

 
?>
