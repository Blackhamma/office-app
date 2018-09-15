
<?php 
$currentPage = 'dashboard';
require "header.php";

$sql = "SELECT * FROM form";
$results = mysqli_query($connect, $sql);


?>


	<div class="col-md-10">
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

			 <?php while ($row = mysqli_fetch_array($results)) { ?>

			        <tr id = <?php echo $row['id']; ?> >
		                <td><?php echo $row['id']; ?></td>
		                <td data-target='num'><?php echo  $row['num']; ?></td>
		                <td data-target='created'><?php echo  $row['created']; ?></td>
		                <td data-target='username'><?php echo  $row['username']; ?></td>
		                <td data-target='descrip'><?php echo  $row['descrip']; ?></td>
		     			<td>
		     			<!--<a id = "<?php echo $row['id']; ?>" class="btn btn-xs btn-info View" ><i class='fas fa-eye'></i></a>-->
		     			<a id = "<?php echo $row['id']; ?>" class="btn btn-xs btn-success Edit" ><i class='fas fa-pencil-alt'></i></a>
		     			<a href="../inc/deleteForm.inc.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger" ><i class='fas fa-trash'></i></a>
		     			</td>
	            	</tr>           
	           
        	<?php } ?>
			        
			    </tbody>

			</table>
		</div>
	</div>
</div>
		


</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){

		$('.View').click(function(){
			var form_id = $(this).attr('id');

			$.ajax({
				url : 'fetch.php',
				method : 'POST',
				data : {form_id : form_id},
				success:function(data){
					$('#form_details').html(data);
					$('#View_data').modal('show');
				}
			});
		});


		$('#insert_formdata').on('submit', function(e){
			e.preventDefault();

			$.ajax({
				url : 'checking.php',
				method : 'POST',
				data : $('#insert_formdata').serialize(),
				success:function(data){

					$('#insert_formdata')[0].reset();
					$('#AddData').modal('hide');
					$('#table').html(data);
				}
			});
		});
		

		$(document).on('click', '.Edit', function(){
			var form_id = $(this).attr('id');

			$.ajax({
				url : "../inc/update.inc.php",
				method: "POST",
				data : {form_id : form_id},
				dataType : "json",
				success:function(data){
					$('#num').val(data.num);
					$('#created').val(data.created);
					$('#srl').val(data.srl);
					$('#authorized').val(data.authorized);
					$('#prob').val(data.prob);
					$('#div').val(data.division);
					$('#office').val(data.office);
					$('#descrip').val(data.descrip);
					$('#username').val(data.username);
					$('#officer').val(data.officer);
					$('#transfer').val(data.transfer);
					$('#diag').val(data.diag);
					$('#form_id').val(data.id);
					$('#formSave').val("Update");
					$('#AddData').modal('show');

				}
			});
		});

	});




</script>


