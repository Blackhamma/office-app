<?php 

require 'db.inc.php';

if (isset($_POST['form_id'])) {
	
	$sql = "SELECT * FROM form WHERE  id = '". $_POST['form_id'] ."'";
	$result = mysqli_query($connect, $sql);

	$row = mysqli_fetch_array($result);

	echo json_encode($row);
}