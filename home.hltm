<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tbarduino";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "connectado com sucesso estou conectato";
    }

?>

<!doctype html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">

    <!-- <meta http-file:///C:/Users/Lauro.Ferreira/Documents/index.html?="refresh" content="10"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AGi PEDDINGHAUS</title>

    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
   
   
</head>

  <body>
  <div class="contener">
    <div class="parent"> 
    <h1> PEDDINGHAUS</h1> <h2></h2>   
    </div> 
    <div id="logosaolado">  
  <div class="clild img">
    <img src="imagem.jpg" alt="Logo HTML5"/>
  </div>
  
  <div class="penndd">        
    <img src="imagem/penddinghaus.jfif" alt="Maquína Penddinghaus"/>
  </div>
  </div>
  <div>
  

 

<br/>
<!-- <h2>Totalizador de Furações = 
<?php
$sql = "SELECT SUM(sensor1) as total FROM tbsensores";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - sensor1 " . $row["sensor1"]. " - sensor2 " . $row["sensor2"]. " -sensor3" . $row["sensor3"] . " -data e hora " . $row["datahora"] .  "<br>";
    // echo "<br/>";
    echo$row['total'];
  }
} else {
  echo "0 results";
}

?>

</h2> -->

<h1>
<link rel="stylesheet" href="css/style.css">
<!--Função Hora em JS-->
<h1 class="hora"><script src="datahour.js"></script></h1>


<br/>
</h1>
<!-- EXIBIR NUMERO DE FURAÇÃO POR DO DIA  -->

 <!-- <h4>Numero de Furações/dia: </h4>
<h4>
<?php
  // select count(sensor1) as total from tbsensores WHERE datahora like '%2022-07-15%';
//  $dia =  date('Y-m-d', strtotime('-1 days'));
$dia = date_default_timezone_set('America/Sao_Paulo');
$dia = date('Y-m-d');
// echo $dia;
$sql = "SELECT SUM(sensor1) as total FROM tbsensores  
WHERE datahora  LIKE '%$dia%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - sensor1 " . $row["sensor1"]. " - sensor2 " . $row["sensor2"]. " -sensor3" . $row["sensor3"] . " -data e hora " . $row["datahora"] .  "<br>";
    echo$row['total'];
  }
} else {
  echo "0 results";
} 

?> -->
</h4>
<div>
<br>
<H5>Tempo de produção 1° turno 07:00 as 19:00</H5>
<h4>
  <?php 
  $hoje = date_default_timezone_set('America/Sao_Paulo');
  // echo 'Agora em São Paulo é: <strong>'.date('Y-m-d H:i:s').'</strong>';
//  $hoje = date('Y-m-d', strtotime('-1 days'));
  $hoje = date('Y-m-d');
  $horaInicio= " 07:00:00";
  $tempoInicial = $hoje.$horaInicio;
  $horaFinal =" 18:59:00";
  $tempoFinal =$hoje.$horaFinal;
   //echo $hoje;
   //echo "</br>";
 //  echo $tempoFinal;
  
  // SELECT SUM(tempo) AS total FROM tbtempo WHERE datahora >= '2022-08-11 07:00:00' and datahora <= '2022-08-11 18:59:00';
  // $sql = "SELECT SUM(tempo) AS total FROM tbtempo WHERE datahoara >='2022-08-15 07:00:00' and datahora <= '2022-08-15 18:59:00'";
  //coleta com soma das culunas novas da tabela
$sql = "SELECT SUM(tempo) as total, SUM(idtempo) as totall, SUM(tempo2) as totalll FROM tbtempo    
WHERE datahora >= '$tempoInicial' and datahora <= '$tempoFinal'";


  $result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
 
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - sensor1 " . $row["sensor1"]. " - sensor2 " . $row["sensor2"]. " -sensor3" . $row["sensor3"] . " -data e hora " . $row["datahora"] .  "<br>";
    // echo$row['total'];
    //$valor = 600; teste luiz

    $valor = $row['total'];
    $valorr = $row['totall'];
    $valorrr = $row['totalll'];
    // echo $valor /60;
   
    echo intval($valor);     //.PHP_EOL espaço      
   // echo " Tempo2";  
   // echo nl2br("\n");
   // echo nl2br("\n");

    echo intval($valorr);     //.PHP_EOL espaço      
   // echo " ID Soma";  
   // echo nl2br("\n");
   // echo nl2br("\n");

    echo intval($valor /60); 
    echo " Minutos";

  }
} else {
  echo "0 results";
}
  ?>
 
</h4>
<br>
<H5>Tempo de produção 2° turno 19:00 as 07:00 da Manhã</H5>
<h4><?php 
  $hoje = date_default_timezone_set('America/Sao_Paulo');
  //  $hoje =  date('Y-m-d', strtotime('-1 days'));
  $hoje = date('Y-m-d');
  // $hoje = date('Y-m-d', strtotime('+1 days'));
  $amanha = date('Y-m-d', strtotime('+1 days')); 
  // $amanha = hoje('Y-m-d'), strtotime('+1 days');
  // $amanha = date('Y-m-d');
  $horaInicio= " 07:00:00";
  $meiaNoite = " 23:59:00";
  $horaFinalHoje= $hoje.$meiaNoite;
  $tempoInicial = $hoje.$horaInicio;
  $horaFinal =" 18:59:00";
  $tempoFinal =$hoje.$horaFinal;
  $horaDiaSeguinte = $amanha.$horaInicio;
  $ontem = date('Y-m-d', strtotime('-1 days'));
  $dataInicioOntem = $ontem.$horaFinal;
  $hojeManha = $hoje.$horaInicio;

    // echo $tempoInicial;
   //echo "</br>";

  if($hoje <= $horaFinalHoje){


    // echo "esse sql faz o calculo de horas trabalhadas entre 18:59:00 do dia atual  as 23:59;00 do dia atual ";


    // SELECT SUM(tempo) AS total FROM tbtempo WHERE datahora >= '2022-08-15 19:00:00' and datahora <= '2022-08-16 23:59:00';
    $sql = "SELECT SUM(tempo) as total FROM tbtempo   
    WHERE datahora >= '$tempoFinal' and datahora <= '$horaFinalHoje'";
      $result = mysqli_query($conn, $sql);
     
    if (mysqli_num_rows($result) > 0) {
     
      while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - sensor1 " . $row["sensor1"]. " - sensor2 " . $row["sensor2"]. " -sensor3" . $row["sensor3"] . " -data e hora " . $row["datahora"] .  "<br>";
        // echo$row['total'];
        $valor = $row['total'];
        // echo $valor;
        echo intval($valor /60); 
        echo " Minutos";
    
      }
    } else {
      echo "0 results";
    }
    // echo "hoje é maior que ontem ";
    // $sql = "SELECT SUM(tempo) as total FROM tbtempo   
    // WHERE datahora >= '$tempoFinal' and datahora <= '$horaDiaSeguinte'";
    //   $result = mysqli_query($conn, $sql);
     
    // if (mysqli_num_rows($result) > 0) {
     
    //   while($row = mysqli_fetch_assoc($result)) {
    //     // echo "id: " . $row["id"]. " - sensor1 " . $row["sensor1"]. " - sensor2 " . $row["sensor2"]. " -sensor3" . $row["sensor3"] . " -data e hora " . $row["datahora"] .  "<br>";
    //     // echo$row['total'];
    //     $valor = $row['total'];
    //     // echo $valor /60;
    //     echo intval($valor /60 ); 
    //     echo " Minutos";
    
    //   }
    // } else {
    //   echo "0 results";
    // }

  }else if($hoje <= $tempoInicial){

    ///conta o tempo depois da meia noite entre meia noite e as 07:00:00 da manha 

    $sql = "SELECT SUM(tempo) as total FROM tbtempo   
    WHERE datahora >= '$dataInicioOntem' and datahora <= '$tempoInicial'";
      $result = mysqli_query($conn, $sql);
     
    if (mysqli_num_rows($result) > 0) {
     
      while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - sensor1 " . $row["sensor1"]. " - sensor2 " . $row["sensor2"]. " -sensor3" . $row["sensor3"] . " -data e hora " . $row["datahora"] .  "<br>";
        // echo$row['total'];
        $valor = $row['total'];
        // echo $valor /60;
        
        echo intval($valor /60 ); 
        echo " Minutos";
    
      }
    } else {
      echo "0 results";
    }




    // echo " hoje nao é maior que ontem";
    // // SELECT SUM(tempo) AS total FROM tbtempo WHERE datahora >= '2022-08-15 19:00:00' and datahora <= '2022-08-16 06:59:00';
    // $sql = "SELECT SUM(tempo) as total FROM tbtempo   
    // WHERE datahora >= '$dataInicioOntem' and datahora <= '$hojeManha'";
    //   $result = mysqli_query($conn, $sql);
     
    // if (mysqli_num_rows($result) > 0) {
     
    //   while($row = mysqli_fetch_assoc($result)) {
    //     // echo "id: " . $row["id"]. " - sensor1 " . $row["sensor1"]. " - sensor2 " . $row["sensor2"]. " -sensor3" . $row["sensor3"] . " -data e hora " . $row["datahora"] .  "<br>";
    //     // echo$row['total'];
    //     $valor = $row['total'];
    //     // echo $valor /60;
    //     echo intval($valor /60 ); 
    //     echo " Minutos";
    
    //   }
    // } else {
    //   echo "0 results";
    // }
  }
  // SELECT SUM(tempo) AS total FROM tbtempo WHERE datahora >= '2022-08-11 07:00:00' and datahora <= '2022-08-11 18:59:00';
  // $sql = "SELECT SUM(tempo) AS total FROM tbtempo WHERE datahoara >='2022-08-15 07:00:00' and datahora <= '2022-08-15 18:59:00'";
 


  ?></h4>

</div>

<br><br>

</div>                     
 

    <form action="">
        <input type="date" name="busca" placeholder="Selecione uma data" >
        <button type="submit">Consultar</button>
        <form action="">
        <button type="submit" name="busca" value="0000000">Limpar consulta</button>
    </form>
    
    
    <form action="listarDias.php">
    <button type="submit" name="busca" >Listar Dias</button>
    </form>

    <form action="index.html">
        <!-- <input type="date" name="busca" placeholder="Selecione uma data" required> -->
        <button type="submit" name= "busca" value="00000">Voltar pagina</button>
    </form>
 


    <br>
    <!-- <table width="600px" border="3">
        <tr>
            <th>Id</th>
            <th>sensor1</th>
            <th>sensor2</th>
            <th>sensor3</th>
            <th>data e hora</th>
        </tr>
        <?php
    
        if (!isset($_GET['busca'])){
          
          // echo $pesquisa;
            ?>
            <tr>
            <td colspan= "3" >digite uma data para consulta</td>
            </tr>
            <?php
        } else {
            $pesquisa = $conn->real_escape_string($_GET['busca']);
            $hoje = date('D-M-Y');
            $sql_code = "SELECT * FROM tbsensores  
            WHERE datahora LIKE '%$pesquisa%'  ORDER BY `tbsensores`.`datahora` DESC ";
            $sql_query = $conn->query($sql_code) or die ("erro ao consultar a base de dados ". $conn->error);

            if ($sql_query->num_rows == 0 ){
                ?>
            <tr>
              <td colspan= "3" >Nenhum resultado encontrado </td>
            </tr>
            <?php
            }else{
                while($dados = $sql_query->fetch_assoc()){
                    ?>
                    <tr>
                       <td><?php echo $dados['id']; ?></td>
                       <td><?php echo $dados['sensor1']; ?></td>
                       <td><?php echo $dados['sensor2']; ?></td>
                       <td><?php echo $dados['sensor3']; ?></td>
                       <td><?php echo $dados['datahora']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
          <?php
        }?>
    </table> -->

        <!-- <p>///////////////////////////////////////////////////////////////////////////////////////</p> -->

    <br>
    <!-- <table width="600px" border="3">
        <tr>
            <th>Data</th>
            <th>sensor1</th>
            <th>sensor2</th>
            <th>sensor3</th>
     
        </tr>
        <?php
    
        if (!isset($_GET['busca'])){
          
          echo $pesquisa;
            ?>
            <tr>
            <td colspan= "3" >digite uma data para consulta</td>
            </tr>
            <?php
        } else {
            $pesquisa = $conn->real_escape_string($_GET['busca']);
            $hoje = date('D-M-Y');
         
            $sql_code = "SELECT data, SUM(sensor1) as sensor1, SUM(sensor2) as sensor2, SUM(sensor2) as sensor3 from tbsensores GROUP by data desc";
            $sql_query = $conn->query($sql_code) or die ("erro ao consultar a base de dados ". $conn->error);

            if ($sql_query->num_rows == 0 ){
                ?>
            <tr>
              <td colspan= "3" >Nenhum resultado encontrado </td>
            </tr>
            <?php
            }else{
                while($dados = $sql_query->fetch_assoc()){

                    ?>
                    <tr>
                  
                       <td><?php echo $dados['data']; ?></td>
                       <td><?php echo $dados['sensor1']; ?></td>
                       <td><?php echo $dados['sensor2']; ?></td>
                       <td><?php echo $dados['sensor3']; ?></td>
              
                    </tr>
                    <?php
                }
            }
            ?>
          <?php
        }?>
    </table> -->

        <br><br>

        </div>
  </body>
</html>
