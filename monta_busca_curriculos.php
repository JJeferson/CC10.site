<?php
   session_start();
    $emailAdm        = $_SESSION['email'];
    $CPFRecrutador   = $_SESSION['CPF'];
    $RGRecrutador    = $_SESSION['RG']; 
  $ControlaAcesso = $_SESSION['Controla_Acesso_ConsultaCurriculo'];


     $Recebe_Nome= $_POST['nome'];
     $Recebe_Formacao_Requerida = $_POST['formacaoRequerida']; 
     $Recebe_Area = $_POST['area'];
     $Recebe_Estado = $_POST['estado']; 
     $Recebe_Pais = $_POST['pais']; 
  //   $Recebe_IdadeInicio = $_POST['idadeInicio'];
  //   $Recebe_IdadeFinal = $_POST['idadeFinal'];
  
   /**  if (!empty($Recebe_Dt_lancamento)){*/
     
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();


                         if (strcasecmp($ControlaAcesso,"SIM") == 0) {

                             


                              



                             

  ?>


                  <!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Curriculo  Super 10!</title>
        <!-- 
    

        <!-- jquery - link cdn -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <!-- bootstrap - link cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="icon" href="imagens/Ico.png">
        <script>
            // código javascript                        
        </script>
    </head>

    <body>

        <!-- Static navbar -->
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

                                         
                    
           <div class="jumbotron">   <p>
             <form  method="post"  id="BuscaCurriculo" name="BuscaCurriculo" align="center"  action="monta_busca_curriculos.php">
             <h3>Use os filtros para efetuar buscas:</h3>
             
             <div class="form-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Busca por nome ...">
            </div>
                                   </br>
                                   
                                            
                                             <label for="exampleInputEmail1">Formação minima: </label>
                                             <select id="formacaoRequerida" name="formacaoRequerida">Formação</>
                                             <<option> </option>
                                             <option>Segundo Grau Completo</option>
                                             <option>Terceiro Grau incompleto</option>
                                             <option>Terceiro Grau completo</option>
                                             <option>Primeiro grau incompleto</option>
                                             <option>Primeiro grau completo</option>
                                             <option>Segundo Grau Incompleto</option>
                                             </select>
                                             
                                     
                                  <label for="exampleInputEmail1">Estado</label>
                                  <select id="estado" name="estado" placeholder="estado">Estado</>
                                  <option> </option>
                                  <option>RS</option>
                                  <option>AC</option>
                                  <option>AL</option>
                                  <option>AM</option>
                                  <option>AP</option>
                                  <option>BA</option>
                                  <option>CE</option>
                                  <option>DF</option>
                                  <option>ES</option>
                                  <option>GO</option>
                                  <option>MA</option>
                                  <option>MG</option>
                                  <option>MS</option>
                                  <option>MT</option>
                                  <option>PA</option>
                                  <option>PB</option>
                                  <option>PE</option>
                                  <option>PI</option>
                                  <option>PR</option>
                                  <option>RJ</option>
                                  <option>RN</option>
                                  <option>RO</option>
                                  <option>RR</option>
                                  <option>RS</option>
                                  <option>SC</option>
                                  <option>SE</option>
                                  <option>SP</option>
                                  <option>TO</option>
                                  <option>Outro</option>
                                  </select>

                                  <label for="exampleInputEmail1">Pais</label>
                                  <select id="pais" name="pais" placeholder="pais"  >Estado</>
                                  <option> </option>
                                  <option>Brasil</option>
                                  <option>Argentina</option>
                                  <option>Chile</option>
                                  <option>EUA</option>
                                  <option>Canada</option>
                                  <option>Mexico</option>
                                  <option>Europa</option>
                                  <option>Russia</option>
                                  <option>Japao</option>
                                  <option>China</option>
                                  <option>Outro</option>
                                  </select>
                                   
                                   
                                     <!--/
                                             <label for="exampleInputEmail1">Idade Inicial</label>
                                             <select id="idadeInicio" name="idadeInicio"   >Idade</>
                                             <option> </option>
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
                                     

                                           
                                             <label for="exampleInputEmail1"> Idade Final</label>
                                             <select id="idadeFinal" name="idadeFinal"  >Idade</>
                                              <option> </option>
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

-->
                                  <label for="exampleInputEmail1">Area: </label>
                                  <select id="area" name="area" placeholder="area"   >Estado</>
                                  <option> </option>
                                 <option>TI/Informatica</option>
                                  <option>Saude</option>
                                  <option>Administração</option>
                                  <option>Educação</option>
                                  <option>Mecanica</option>
                                  <option>Engenharia</option>
                                  <option>Jornalismo</option>
                                  <option>Logistica</option>
                                  <option>Moda</option>
                                  <option>Musica</option>
                                  <option>Produção</option>
                                  <option>Publicidade</option>
                                  <option>Quimica</option>
                                  <option>RH</option>
                                  <option>Seguros</option>
                                  <option>Direito</option>
                                  <option>Açougue/Padarias/Diversos</option>
                                  <option>Eletrica-Eletrecista-Manutencao</option>
                                  <option>Telecomunicações</option>
                                  <option>Distribuição</option>
                                  <option>Trasnporte-Aereo</option>
                                  <option>Transporte-Mar</option>
                                  <option>Transporte-Terrestre</option>
                                  <option>Turismo</option>
                                  <option>Tributação</option>
                                  <option>Veterinaria</option>
                                  <option>Hotelaria</option>
                                  <option>Administração-Empresas</option>
                                  <option>Farmacia</option>
                                  <option>Cinema</option>
                                  <option>Outro</option>
                                  </select>
                                 </br></br>



                                 <button type="submit" class="btn btn-primary form-control">Buscar</button>


            </form>   
          </p>
        </div>

                       <?php
                       /**Lista das vagas */

                              $sql = " SELECT * from curriculos ";
                              $sql.= " where nome like '%$Recebe_Nome%' ";
                           
                              $sql.= " and formacao  like '%$Recebe_Formacao_Requerida%' ";
                              $sql.= " and estado like '%$Recebe_Estado%' ";
                              $sql.= " and pais like '%$Recebe_Pais%' ";
                              $sql.= " and area like '%$Recebe_Area%' ";
                      /*        $sql.= " and idade >= '$Recebe_IdadeInicio' ";
                              $sql.= " and idade <= '$Recebe_IdadeFinal' ";
                     */         
                     
                            $resultado_id = mysqli_query($link, $sql);
 
                    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                          ?>
                    <form  method="post"  id="BuscaCurriculo" name="BuscaCurriculo" align="center"  action="exibe_curriculoCompleto.php">

                         

                         <?php
                    echo '<a href="#" class="list-group-item">';
                    echo '<h4 class="list-group-item-heading">'.$registro['nome'].'</h4>';
                    echo '</br>';
                    
                    echo '<p class="list-group-item-text"> idade:'.$registro['idade'].' Area de Atuação: '.$registro['area'].'</p>';
                         ?>

                   <input type="hidden" class="form-control" id="CPFCandidato" name="CPFCandidato" value="<?php echo $registro['CPF'];?>
                          ">

                         </br></br>
                         <button type="submit" class="btn btn-default" id="Grava"   >Ver mais </button>
                         </form>
                         <?php
                  echo '</a>';
                   }//fim do laço de repetição
 
 
                       ?>



        <div class="clearfix"></div>
    </div>


      </div>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  </body>
</html>
       <?php
                } else {
                      echo 'teste aqui deu erro ';
                     header('Location: erro_Consulta_curriculos.php');
                      }
  
 
 
                       ?>