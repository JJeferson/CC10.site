<?php

/** importando a classe de conexão com banco de dados */
require_once('db.class.php');
 


$objDb = new db();
$link = $objDb->conecta_mysql();


                              $sql = " SELECT usuario,email from usuarios ";
             
                             $resultado_id = mysqli_query($link, $sql);
                             $dados = array();  
                             while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
						    // echo 'nome:'.$registro['usuario'].'email:'.$registro['email'].'</br>';		
						    // $dados[] =$registro['usuario'];
						    $dados[]=$registro;		 
							 }
                           echo json_encode($dados);



 
?>