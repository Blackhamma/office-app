<?php 
require 'db.inc.php';

 if (isset($_POST['formSave'])) {
 	
 	$num = mysqli_real_escape_string($connect, $_POST['num']);
 	$date = mysqli_real_escape_string($connect, $_POST['date']);
 	$srl = mysqli_real_escape_string($connect, $_POST['srl']);
 	$authorized = mysqli_real_escape_string($connect, $_POST['authorized']);
 	$div = mysqli_real_escape_string($connect, $_POST['div']);
 	$office = mysqli_real_escape_string($connect, $_POST['office']);
 	$descrip = mysqli_real_escape_string($connect, $_POST['descrip']);
 	$uid = mysqli_real_escape_string($connect, $_POST['uid']);
 	$officer = mysqli_real_escape_string($connect, $_POST['officer']);
 	$prob = mysqli_real_escape_string($connect, $_POST['prob']);
 	$diag = mysqli_real_escape_string($connect, $_POST['diag']);
 	

 	$sql = "INSERT INTO form (num, created, srl, authorized, division, office, descrip, uid, officer, prob, diag) Values ('$num', '$date', '$srl', '$authorized', '$div', '$office', '$descrip', '$uid', '$officer', '$prob', '$diag');";

 	mysqli_query($connect, $sql);
 	header("Location: ../pages/dashboard.php?saveform=Success!");
 	exit();


 }else {
 	header("Location: ../pages/dashboard.php?saveform=Error!");
 	exit();
 }






 ?>