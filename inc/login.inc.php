<?php 
 require 'db.inc.php';
session_start();

 if (isset($_POST['loginBtn'])) {
 	

 	$uid = mysqli_real_escape_string($connect, $_POST['uid']);
 	$pwd = mysqli_real_escape_string($connect, $_POST['pwd']);

 	if (empty($uid) || empty($pwd)) {
 		header("Location: ../index.php?login=empty!");
 		exit();
 	}else{
 		$sql = "SELECT * FROM users WHERE userName = '$uid';";
 		$results = mysqli_query($connect, $sql);
 		$chckResults = mysqli_num_rows($results);

 		if ($chckResults < 1) {
 			header("Location: ../index.php?login=Error1!");
 			exit();
 		}else {
 			if ($row = mysqli_fetch_assoc($results)) {
 				$pwdcheck = password_verify($pwd, $row['password']);

 				if ($pwdcheck == false) {
 					header("Location: ../index.php?login=Error2!");
 					exit();
 				}elseif ($pwdcheck == true) {
 					$_SESSION['userId'] = $row['id'];
 					$_SESSION['userName'] = $row['userName'];
 					header("Location: ../pages/dash.php?login=success!");
 					exit();
 				}
 			}
 		}
 	}

 } else {
 	header("Location: ../index.php?login=Error3!");
 	exit();
 }