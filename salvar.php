

<?php
	include "conexao.php";
	$s1_rec = $_GET['s1'];
	$s2_rec = $_GET['s2'];
	$s3_rec = $_GET['s3'];
	

	$SQL_INSERT = "INSERT INTO tbsensores (sensor1, sensor2, sensor3) VALUES (:S1, :S2, :S3)";
	$stmt = $conexao->prepare($SQL_INSERT);
	$stmt->bindParam(":S1", $s1_rec);
	$stmt->bindParam(":S2", $s2_rec);
	$stmt->bindParam(":S3", $s3_rec);

	if($stmt->execute()){
		echo"insert ok ";

	}else {
		echo"inser_erro";
	}

	
	// echo" sensor1 recebido: ".$sensor1_recebido;
	// echo "<br/>";
	// echo" sensor2 recebido: ".$sensor2_recebido;
	// echo "<br/>";
	// echo" sensor3 recebido: ".$sensor3_recebido;

?>