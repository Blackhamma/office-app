<?php 
 require 'db.inc.php';


if (isset($_POST['updateFormBtn'])) {

	$created = $_POST['created']);
	$srl = $_POST['srl']);
	$authorized = $_POST['authorized']);
	$div = $_POST['division']);
	$office = $_POST['office']);
	$descrip = $_POST['descrip']);
	$useruid = $_POST['uid']);
	$officer = $_POST['officer']);
	$prob = $_POST['prob']);
	$diag = $_POST['diag']);
	$id = $_POST['id']);


	$sql = "UPDATE form SET created = '$created', srl = '$srl', authorized = '$authorized', division = '$div', office = '$office', descrip = '$descrip', uid = '$useruid', officer = '$officer', prob = '$prob', diag = '$diag' WHERE id = '$id'; ";
	$results = mysqli_query($connect, $sql);

	if ($results) {
		header("Location: ../pages/dashboard.php?formupdate=success");
		exit();
	
	}else {
		header("Location: ../pages/dashboard.php?formupdate=failed");
		exit();
	}

}

