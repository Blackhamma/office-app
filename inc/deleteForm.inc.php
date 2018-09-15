<?php 

require 'db.inc.php';

$sql = "DELETE FROM form WHERE id = '$_GET[id]'";

$results = mysqli_query($connect, $sql);

if ($results) {
	header("Location: ../pages/dash.php? delete = success");
	exit();
}else {
	header("Location: ../pages/dash.php?delete = ERROR!");
	exit();
}