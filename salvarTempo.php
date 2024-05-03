
<h3>Tela salvar tempo</h3>
<?php
	include "conexao.php";
	$tempo1 = $_GET['t1'];
	$tempo2 = $_GET['t2'];
	
	

	$SQL_INSERT = "INSERT INTO tbtempo (tempo,tempo2) VALUES (:T1, :T2)";
	$stmt = $conexao->prepare($SQL_INSERT);
	$stmt->bindParam(":T1", $tempo1);
	$stmt->bindParam(":T2", $tempo2);

	if($stmt->execute()){
		echo"insert ok ";

	}else {
		echo"inser_erro";
	}

	

	
	echo" sensor1 recebido: ".$tempo1;
	echo" sensor2 recebido: ".$tempo2;
	echo "<br/>";

?>