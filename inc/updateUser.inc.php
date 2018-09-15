<?php 
 require 'db.inc.php';


if (isset($_POST['id'])) {
	

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$userName = $_POST['userName'];
	$userpwd = $_POST['password'];
	$role = $_POST['role'];
	$status = $_POST['status'];
	$id = $_POST['id'];


	$hashedpwd = password_hash($userpwd, PASSWORD_DEFAULT);

	$sql = "UPDATE users SET firstName = '$firstName', lastName = '$lastName', userName = '$userName', password = '$hashedpwd', role = '$role', status = '$status' WHERE id = '$id';";
	$results = mysqli_query($connect, $sql);

	if ($results) {
		header("Location: ../pages/users.php?update=success");
		exit();
	
	}else {
		header("Location: ../pages/users.php?update=failed");
		exit();
	}
}

