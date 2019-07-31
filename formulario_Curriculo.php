 
<?php
   
    session_start();
     $Seta_Nome= $_SESSION['usuario'];
     $Seta_CPF= $_SESSION['CPF'];
     $Seta_email= $_SESSION['email'];
     $Seta_endereco= $_SESSION['endereco'];
     $Seta_estado= $_SESSION['estado'];
     $Seta_area= $_SESSION['area'];
     $Seta_pais= $_SESSION['pais'];


     require_once('db.class.php');

$sqlCurriculo="select * from curriculos  where email='$Seta_email' and CPF='$Seta_CPF'";


$objDb = new db();
$link = $objDb->conecta_mysql();


$Resultado = mysqli_query($link,$sqlCurriculo);
/**  convertendo */
$Dados_Curriculo = mysqli_fetch_array($Resultado);

/**
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
*/

 $Exibe_EmpregoAtual = $Dados_Curriculo['emprego_atual'];
 $Exibe_Idade = $Dados_Curriculo['idade'];
 $Exibe_Formacao = $Dados_Curriculo['formacao'];
 $Exibe_Cursos = $Dados_Curriculo['cursos'];

 $Exibe_dt_inicio_ex1 = $Dados_Curriculo['dt_inicio_ex1'];
 $Exibe_dt_final_ex1 = $Dados_Curriculo['dt_final_ex1'];
 $Exibe_ex1 = $Dados_Curriculo['ex1'];

 $Exibe_dt_inicio_ex2 = $Dados_Curriculo['dt_inicio_ex2'];
 $Exibe_dt_final_ex2 = $Dados_Curriculo['dt_final_ex2'];
 $Exibe_ex2 = $Dados_Curriculo['ex2'];

 $Exibe_dt_inicio_ex3 = $Dados_Curriculo['dt_inicio_ex3'];
 $Exibe_dt_final_ex3 = $Dados_Curriculo['dt_final_ex3'];
 $Exibe_ex3 = $Dados_Curriculo['ex3'];
 

 


?> 

<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Curriculo Super 10!</title>
    
    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

             <script>
      
              function limite_textarea1(valor) {
               quant = 1000;
               total = valor.length;
               if(total <= quant) {
               resto = quant - total;
               document.getElementById('cont').innerHTML = resto;
               } else {
               document.getElementById('texto').value = valor.substr(0,quant);
               } 
               } 


               function limite_textarea2(valor) {
               quant = 1000;
               total = valor.length;
               if(total <= quant) {
               resto = quant - total;
               document.getElementById('cont2').innerHTML = resto;
               } else {
               document.getElementById('texto').value = valor.substr(0,quant);
               } 
               } 


               function limite_textarea3(valor) {
               quant = 1000;
               total = valor.length;
               if(total <= quant) {
               resto = quant - total;
               document.getElementById('cont3').innerHTML = resto;
               } else {
               document.getElementById('texto').value = valor.substr(0,quant);
               } 
               } 
              </script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  </head>

  <body>

    <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="imagens/Ico.png" />
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Home.php">Voltar para Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


      <div class="container">
        
               <!-- Parametros do formulario, como o action por aqui no form -->

               <form  method="post"  id="cadCurriculo" name="cadCurriculo" align="center"  action="grava_dados_curriculo.php">
               <br>
               <br> 
               <br> 
               <br> 
               <br> 
               <h2 align="center"> Curriculo </h2>


               <h4>  Bem vindo  
               <?php         
                echo $Seta_Nome;
               ?>
               </h4> </br>
                                            
                                            <h4>
                                              Alguns teus dados:
                                              <?php     
                                              echo '</br>';
                                              ?>
                                              CPF:
                                              <?php     

                                               echo $Seta_CPF;
                                              ?>
                                                , Endereço: 
                                               <?php         
                                               
                                               echo $Seta_endereco ;
                                               echo '  ,   ';
                                               echo $Seta_estado;
                                               echo '  ,   ';
                                               echo $Seta_pais;
                                               echo '  ,  area de atuação:   ';
                                               echo $Seta_area;
                                              ?>
                                            </h4>  
               </br></br>  
                                            <div class="form-group">
                                            <h4>Idade</h4>
               
                                             <select id="idade" name="idade" required="requiored" >Idade</>
                                              <option><?php 
                                               echo  $Exibe_Idade;
                                             ?></option>
                                             <option>14</option>
                                             <option>15</option>
                                             <option>16</option>
                                             <option>17</option>
                                             <option>18</option>
                                             <option>19</option>
                                             <option>20</option>
                                             <option>21</option>
                                             <option>22</option>
                                             <option>23</option>
                                             <option>24</option>
                                             <option>25</option>
                                             <option>26</option>
                                             <option>27</option>
                                             <option>28</option>
                                             <option>29</option>
                                             <option>30</option>
                                             <option>31</option>
                                             <option>32</option>
                                             <option>33</option>
                                             <option>34</option>
                                             <option>35</option>
                                             <option>36</option>
                                             <option>37</option>
                                             <option>38</option>
                                             <option>39</option>
                                             <option>40</option>
                                             <option>41</option>
                                             <option>42</option>
                                             <option>43</option>
                                             <option>44</option>
                                             <option>45</option>
                                             <option>46</option>
                                             <option>47</option>
                                             <option>48</option>
                                             <option>49</option>
                                             <option>50</option>
                                             <option>51</option>
                                             <option>52</option>
                                             <option>53</option>
                                             <option>54</option>
                                             <option>55</option>
                                             <option>56</option>
                                             <option>57</option>
                                             <option>58</option>
                                             <option>59</option>
                                             <option>60</option>
                                             <option>61</option>
                                             <option>62</option>
                                             <option>63</option>
                                             <option>64</option>
                                             <option>65</option>
                                             <option>66</option>
                                             <option>67</option>
                                             <option>68</option>
                                             <option>69</option>
                                             <option>70</option>
                                             <option>71</option>
                                             <option>72</option>
                                             <option>73</option>
                                             <option>74</option>
                                             <option>75</option>
                                             <option>76</option>
                                             <option>77</option>
                                             <option>78</option>
                                             <option>79</option>
                                             <option>80</option>
                                          
                                             </select>
               
               </div>
 
                                   <h3 align="center">Cursos e Formações</h3>
                                   </br></br></br>
                                   
                                             <h4>Formação</h4>
                                             <select id="formacao" name="formacao" required="requiored" >Formação</>
                                             <<option><?php 
                                               echo   $Exibe_Formacao;
                                             ?></option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                    <h4>Descreva teus cursos e formações</h4>
                                     
                                    <div class="form-group">
                                    <textarea class="form-control" rows="7" id=="cursos" name="cursos"  maxlength="1000" required="requiored" ><?php 
                                               echo   $Exibe_Cursos;
                                             ?></textarea>
                                    </div>
               
           
                                    <h3 align="center">Experiencias</h3>
                                    </br></br></br></br>  
                                   
                                    <h4>Ultima experiencia</h4>
                                    <label for="exampleInputEmail1">Inicio</label>
                                    <input type="date"  id="Dt_inicio1" name="Dt_inicio1" required="requiored" value="<?php 
                                               echo    $Exibe_dt_inicio_ex1;
                                               ?>" " >
                                    <label for="exampleInputEmail1">Final</label>
                                    <input type="date"  id="Dt_fim1" name="Dt_fim1" required="requiored"  value="<?php 
                                               echo     $Exibe_dt_final_ex1;
                                               ?>">
                                             <h4>Emprego Atual?</h4>
                                             <select id="emprego_atual" name="emprego_atual" required="requiored" ></>
                                              <option> <?php 
                                               echo   $Exibe_EmpregoAtual;
                                               ?></option>
                                             <option>sim</option>
                                             <option>nao</option> 
                                             </select>
                                    

                                    <div class="form-group">
                                    <label for="comment" >Descrição</label>
                                    <span id="cont">1000</span> Restantes <br>
                                    <textarea class="form-control" rows="10" onkeyup="limite_textarea1(this.value)" id=="exp1" name="exp1" required="requiored" maxlength="1000">
                                      
                                             <?php 
                                               echo   $Exibe_ex1;
                                             ?>
                                    </textarea>
                                    </div>
               

                                    </br></br>

                                    <h4>Penultima experiencia</h4>
                                    <label for="exampleInputEmail1">Inicio</label>
                                    <input type="date"  id="Dt_inicio2" name="Dt_inicio2" value="<?php 
                                               echo    $Exibe_dt_inicio_ex2;
                                               ?>">
                                    <label for="exampleInputEmail1">Final</label>
                                    <input type="date"  id="Dt_fim2" name="Dt_fim2" value="<?php 
                                               echo     $Exibe_dt_final_ex2;
                                               ?>" >
                                    

                                    <div class="form-group">
                                    <label for="comment">Descrição</label>
                                    <span id="cont2">1000</span> Restantes <br>
                                    <textarea class="form-control" rows="10"  onkeyup="limite_textarea2(this.value)"  id=="exp2" name="exp2" maxlength="1000">
                                            <?php 
                                               echo   $Exibe_ex2;
                                             ?>
                                    </textarea>
                                    </div>
               

                                    </br></br>

                                    <h4>Anterior</h4>
                                    <label for="exampleInputEmail1">Inicio</label>
                                    <input type="date"  id="Dt_inicio3" name="Dt_inicio3" value="<?php 
                                               echo    $Exibe_dt_inicio_ex3;
                                               ?>" >
                                    <label for="exampleInputEmail1">Final</label>
                                    <input type="date"  id="Dt_fim3" name="Dt_fim3" value="<?php 
                                               echo     $Exibe_dt_final_ex3;
                                               ?>" >
                                    

                                    <div class="form-group">
                                    <label for="comment">Descrição</label>
                                    <span id="cont3">1000</span> Restantes <br>
                                    <textarea class="form-control" rows="10"  onkeyup="limite_textarea3(this.value)"  id=="exp3" name="exp3" maxlength="1000">
                                       <?php 
                                               echo   $Exibe_ex3;
                                             ?>
                                    </textarea>
                                    </div>


               <button type="submit" class="btn btn-default" id="Grava"   >Grava  </button>
               

               </div>



               </form>

             

               <br> 
               <br> 
               <br> 
               
               </div>
               </form>

            


</div>
<!-- MArco zero -->
      <!-- FOOTER -->
      <footer>
      
      </footer>

    

    
  </body>
</html>
