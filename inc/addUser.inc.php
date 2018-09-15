<?php 

include 'db.inc.php';

if (isset($_POST['addUserBtn'])) {
	
	$uid_first = mysqli_real_escape_string($connect, $_POST['uid_first']);
	$uid_last = mysqli_real_escape_string($connect, $_POST['uid_last']);
	$uid = mysqli_real_escape_string($connect, $_POST['user_uid']);
	$uid_pwd = mysqli_real_escape_string($connect, $_POST['uid_pwd']);
	$role = mysqli_real_escape_string($connect, $_POST['role']);
	$status = mysqli_real_escape_string($connect, $_POST['status']);
	

	if (empty($uid_first) || empty($uid_last) || empty($uid) || empty($uid_pwd) || empty($role)) {
		header("Location: ../pages/users.php?Add user = empty");
		exit();
	}else {
		if (!preg_match("/^[a-zA-Z]*$/", $uid_first) || !preg_match("/^[a-zA-Z]*$/", $uid_last) ) {
			header("Location: ../pages/users.php?Add user = invalid!");
			exit();
		}else {
			$sql = "SELECT * FROM users WHERE userName = '$uid'";
			$results = mysqli_query($connect, $sql);
			$chckresults = mysqli_num_rows($results);

			if ($chckresults > 0) {
				header("Location: ../pages/users.php?Add user = username Taken");
				exit();
			} else {
				$hashedpwd = password_hash($uid_pwd, PASSWORD_DEFAULT);
				$sql = "INSERT INTO users (firstName, lastName, userName, password, role, status) VALUES ('$uid_first', '$uid_last', '$uid', '$hashedpwd', '$role', '$status');";
				mysqli_query($connect, $sql);	
				header('Location: ../pages/users.php?Add user = success');
				exit();
			}
		}
	}

} else {
	header("Location: ../pages/users.php");
	exit();
} 

/*if (empty($uid_first) or empty($uid_last) or empty($uid) or empty($uid_pwd) or empty($role) or empty($status)) {
	
}*/