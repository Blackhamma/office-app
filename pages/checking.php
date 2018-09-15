<?php 
	session_start();
	include "../inc/db.inc.php";

if(!empty($_POST)){

	$output = '';
	$num = mysqli_real_escape_string($connect, $_POST['num']);
 	//$user_id = mysqli_real_escape_string($connect, $_POST[$_SESSION["userId"]]);
 	$created = mysqli_real_escape_string($connect, $_POST['created']);
 	$srl = mysqli_real_escape_string($connect, $_POST['srl']);
 	$authorized = mysqli_real_escape_string($connect, $_POST['authorized']);
 	$div = mysqli_real_escape_string($connect, $_POST['div']);
 	$office = mysqli_real_escape_string($connect, $_POST['office']);
 	$descrip = mysqli_real_escape_string($connect, $_POST['descrip']);
 	$username = mysqli_real_escape_string($connect, $_POST['username']);
 	$officer = mysqli_real_escape_string($connect, $_POST['officer']);
 	$transfer = mysqli_real_escape_string($connect, $_POST['transfer']);
 	$prob = mysqli_real_escape_string($connect, $_POST['prob']);
 	$diag = mysqli_real_escape_string($connect, $_POST['diag']);


 	if ($_POST['form_id'] != '') {
 		$sql = "UPDATE form SET created = '$created', srl = '$srl', authorized = '$authorized', division = '$div', office = '$office', descrip = '$descrip', username = '$username', officer = '$officer', transfer = '$transfer', prob = '$prob', diag = '$diag' WHERE id = '".$_POST["form_id"]."'; ";

 	}else {
 		$sql = "INSERT INTO form (num, user_id, created, srl, authorized, division, office, descrip, username, officer, prob, diag) Values ('$num', '$created', '$srl', '$authorized', '$div', '$office', '$descrip', '$username', '$officer', '$prob', '$diag');";

 	}
 	

 	

 	if (mysqli_query($connect, $sql)) {
 		
 		//$output .='<label class="text-success">Data Inserted </label>';
 		$sql = "SELECT * FROM form";
 		$result = mysqli_query($connect, $sql);
 		$output .= '
 					<table class="table table-striped table-bordered" id="table">
				    <thead>
				        <tr>
				            <th>#</th>
				            <th>Number</th>
				            <th>Date</th>
				            <th>Username</th>
				            <th>Description</th>
				            <th>Action</th>
				        </tr>
				    </thead>
				    <tbody>

 		';
 		while ($row = mysqli_fetch_array($result)) { 

 			$output .='

			        <tr>
		                <td>' . $row["id"] . '</td>
		                <td>' . $row["num"] . '</td>
		                <td>' . $row["created"] . '</td>
		                <td>' . $row["username"] .' </td>
		                <td>' . $row["descrip"] . '</td>
		     			<td>
		     			
		     			<a id = ' . $row['id'] . ' class="btn btn-xs btn-success Edit" ><i class="fas fa-pencil-alt"></i></a>
		     			<a href="../inc/deleteform.inc.php?id="' . $row['id'] . '"  onclick="dlt(' . $row["id"] . ')" class="btn btn-xs btn-danger" ><i class="fas fa-trash"></i></a></td>
	            	</tr>           
	           ';


	        $output .='
	        		 </tbody>

			</table>

	        ';
	       }

	       echo $output;
 	}
}

 ?>