
<h1>bom dia brasil</h1>
<?php
// include "conexao.php";
$CON_CONEXAO ="mysql:host=localhost;dbname=tbarduino;charset=utf8";
$CON_USUARIO ="root";
$CON_SENHA ="";
 try{
	$conexao = new PDO($CON_CONEXAO, $CON_USUARIO, $CON_SENHA);
	echo "Conectado com sucesso";
 } catch (PDOException $erro){
	echo "Erro:". $erro->getMessage();
	exit;

 }
	$sensor1_recebido = $_GET['s1'];
	$sensor2_recebido = $_GET['s2'];
	$sensor3_recebido = $_GET['s3'];

	
	echo" sensor1 recebido: ".$sensor1_recebido;
	echo "\n";
	echo" sensor2 recebido: ".$sensor2_recebido;
	echo "\n";
	echo" sensor3 recebido: ".$sensor3_recebido;

	

// mysqli_close($conexao);
// 	echo"<pre>";
// 	print_r($row);
// 	echo"</pre>";


?>