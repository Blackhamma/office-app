<?php 
 require '../inc/db.inc.php';

if (isset($_POST['formId'])) {
	$output = '';

	$sql = "SELECT * FROM form WHERE id = '".$_POST["formId"]."' ";
	$results = mysqli_query($connect, $sql); ?>

	
		<div class="table-responsive">
			<div class="table table-bordered">';

	<?php	while($row = mysqli_fetch_array($results)){ ?>


				<tr>
					<td width = "30%"><label>Number</label></td>
					<td width = "70%"><?php '.$row["num"].' ?></td>
				</tr>
				
				<tr>
					<td width = "30%"><label>Created on</label></td>
					<td width = "70%"><?php '.$row["created"].' ?></td>
				</tr>

				<tr>
					<td width = "30%"><label>Number</label></td>
					<td width = "70%"><?php '.$row["num"].' ?></td>
				</tr>

				<tr>
					<td width = "30%"><label>Number</label></td>
					<td width = "70%"><?php '.$row["num"].' ?></td>
				</tr>

				<tr>
					<td width = "30%"><label>Number</label></td>
					<td width = "70%"><?php '.$row["num"].' ?></td>
				</tr>

				<tr>
					<td width = "30%"><label>Number</label></td>
					<td width = "70%"><?php '.$row["num"].' ?></td>
				</tr>

				<tr>
					<td width = "30%"><label>Number</label></td>
					<td width = "70%"><?php '.$row["num"].' ?></td>
				</tr>

				<tr>
					<td width = "30%"><label>Number</label></td>
					<td width = "70%"><?php '.$row["num"].' ?></td>
				</tr>

	 </table> </div>
<?php } ?>