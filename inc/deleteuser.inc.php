<?php 

require 'db.inc.php';

$sql = "DELETE FROM users WHERE id = '$_GET[id]'";

$results = mysqli_query($connect, $sql);

if ($results) {
	header("Location: ../pages/users.php? delete = success");
	exit();
}else {
	header("Location: ../pages/users.php?dele = ERROR!");
	exit();
}