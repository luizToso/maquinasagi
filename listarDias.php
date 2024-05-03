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
        echo "connectado com sucesso";
    }
?>

<!doctype html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">

    <!-- <meta http-file:///C:/Users/Lauro.Ferreira/Documents/index.html?="refresh" content="10"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listar Dias</title>

    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

  <body>
  
    <h1>AGI-Brasil - PEDDINGHAUS</h1>
<div>

<script type="text/javascript" language="JavaScript">

                // Função que monta Mês, Dia, e Ano para exibir no HTML

                // Declaração de Variaveis que receberam os valores:
                var now = new Date();

                var hours = now.getHours();

                var minutes = now.getMinutes();

                var timeValue = "" + ((hours >12) ? hours -12 :hours)

                //Tratamento quantidade de Digitos nos Minutos e exibi se é

                // dia ou noite, PM, AM

                timeValue += ((minutes < 10) ? ":0" : ":") + minutes

                timeValue += (hours >= 12) ? " PM" : " AM"

                timerRunning = true;

                mydate = new Date();

                myday = mydate.getDay();

                mymonth = mydate.getMonth();

                myweekday = mydate.getDate();

                weekday = myweekday;

                myyear = mydate.getYear();

                year = myyear;

                // Tratamento dos Dias da Semana

                if(myday == 0)

                               day = " Domingo, "

                else if(myday == 1)

                               day = " Segunda Feira, "

                else if(myday == 2)

                               day = " Terça Feira, "

                else if(myday == 3)

                               day = " Quarta Feira, "

                else if(myday == 4)

                               day = " Quinta Feira, "

                else if(myday == 5)

                               day = " Sexta Feira, "

                else if(myday == 6)

                               day = " Sábado, "

                //Tratamento dos Meses

                if(mymonth == 0)

                               month = " de Janeiro  "

                else if(mymonth ==1)

                               month = " de Fevereiro  "

                else if(mymonth ==2)

                               month = " de Março  "

                else if(mymonth ==3)

                               month = " de April  "

                else if(mymonth ==4)

                               month = " de Maio  "

                else if(mymonth ==5)

                               month = " de Junho  "

                else if(mymonth ==6)

                               month = " de Julho  "

                else if(mymonth ==7)

                               month = " de Agosto  "

                else if(mymonth ==8)

                               month = " de Setembro  "

                else if(mymonth ==9)

                               month = " de Outubro  "

                else if(mymonth ==10)

                               month = " de Novembro  "

                else if(mymonth ==11)

                               month = " de Dezembro  "

                //Exibe na Pagina o Resultado concatenando(+) os valores

                document.write( day + myweekday + month + " - " + timeValue);

</script> 

<br/>


    <form action="home.php">
        <!-- <input type="date" name="busca" placeholder="Selecione uma data" required> -->
        <button type="submit" name= "busca" value="00000">voltar</button>
    </form>

</div>                     

    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

   
        <p>///////////////////////////////////////////////////////////////////////////////////////</p>
    <br>
    <table width="600px" border="3">
        <tr>
            <th>Data</th>
            <th>sensor1</th>
            <th>sensor2</th>
            <th>sensor3</th>
     
        </tr>
        <?php
    
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
     ?>
    </table>

        <br><br>


  </body>
</html>