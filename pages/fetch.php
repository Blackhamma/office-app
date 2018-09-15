<?php 
 require '../inc/db.inc.php';


if (isset($_POST['form_id'])) {
	
	$output = '';
	$sql = "SELECT * FROM form WHERE id = '". $_POST['form_id'] ."'";
	$result = mysqli_query($connect, $sql);

	$output .='
		<div class="table-responsive">
		<table class="table table-striped table-bordered">
	';
	while ($row = mysqli_fetch_array($result)) {
		$output = '
			<tr>
				<td width="30%"><label>NUMBER</label></td>
				<td width="70%">'. $row["num"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>CREATED ON</label></td>
				<td width="70%">'. $row["created"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>SERIAL NUMBER</label></td>
				<td width="70%">'. $row["srl"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>DIVISION</label></td>
				<td width="70%">'. $row["div"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>USERNAME</label></td>
				<td width="70%">'. $row["uid"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>AUTHORIZED BY</label></td>
				<td width="70%">'. $row["authorized"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>PROBLEM</label></td>
				<td width="70%">'. $row["prob"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>IT OFFICER</label></td>
				<td width="70%">'. $row["officer"] .'</td>
			</tr>
			<tr>
				<td width="30%"><label>DIAGONOSIS</label></td>
				<td width="70%">'. $row["diag"] .'</td>
			</tr>

		';
	}

	$output .='
		</table></div>
	';

	echo $output;
	
}

