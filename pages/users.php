<?php 
$currentPage = 'user';
require 'header.php';

$sql = "SELECT * FROM users";
$results = mysqli_query($connect, $sql);

?>



<div class="col-md-10">

	<div class="col-md-2">
		<button class="btn" data-toggle="modal" data-target="#addUser">
			<i class="fas fa-plus"></i> <b>Add User</b>
		</button>
	</div>
	<br><br>

	<div class="responsive">
		<table class="table table-striped table-bordered" id="table">
				<thead>
				    <tr>
				        <th>#</th>
				        <th>Firstname</th>
				        <th>Lastname</th>
				        <th>Username</th>
				        <th>Role</th>
				        <th>Action</th>
				    </tr>
				</thead>
				<tbody>

			<?php 
			while($user = mysqli_fetch_array($results)){ ?>	
				
					<tr id = <?php echo $user['id']; ?> >
	                <td><?php echo $user['id']; ?></td>
	                <td data-target = "firstName"><?php echo  $user['firstName']; ?></td>
	                <td data-target = "lastName"><?php echo  $user['lastName']; ?></td>
	                <td data-target = "userName"><?php echo  $user['userName']; ?></td>
	                <td data-target = "role"><?php echo  $user['role']; ?></td>
	     			<td>
	     				<a data-role="update" data-id = <?php echo $user['id']; ?> class="btn btn-success btn-xs" ><i class='fas fa-pencil-alt'></i></a> 
	     				<a href="../inc/deleteuser.inc.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs"><i class='fas fa-trash' ></i></a></td>
	            	</tr>           
	           
        	<?php } ?>
       
         </tbody>

        </table>
     </div>   

<script type="text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();

		$(document).on('click', 'a[data-role=update]', function(){
			var id = $(this).data('id');
			var firstName = $('#'+id).children('td[data-target=firstName]').text();
			var lastName = $('#'+id).children('td[data-target=lastName]').text();
			var userName = $('#'+id).children('td[data-target=userName]').text();
			var role = $('#'+id).children('td[data-target=role]').text();
			var togglebtn = $('#'+id).children('td[data-target=togglebtn]').text();


			$('#firstName').val(firstName);
			$('#lastName').val(lastName);
			$('#userName').val(userName);
			$('#role').val(role);
			$('#status').val(status);
			$('#userId').val(id);
			$('#updateUser').modal('toggle');
		});



		$('form#updateUserform').on('submit',function(){

			var id = $('#userId').val();
			var firstName = $('#firstName').val();
			var lastName = $('#lastName').val();
			var userName = $('#userName').val();
			var pwd = $('#userpwd').val();
			var role = $('#role').val();
			var status = $('#status').val();

			$.ajax({
				url    	: '../inc/updateUser.inc.php',
				method 	: 'post',
				data   	: {firstName : firstName, lastName : lastName, userName : userName, password : pwd, role : role, status : status, id : id},
				success	: function(response){
						 	$('#'+id).children('td[data-target=firstName]').text(firstName);
					 		$('#'+id).children('td[data-target=lastName]').text(lastName);
					 		$('#'+id).children('td[data-target=userName]').text(userName);
	 						$('#'+id).children('td[data-target=role]').text(role);
	 						$('#'+id).children('td[data-target=status]').text(status);
	 						$('#updateUser').modal('toggle');
	 					}
	 		});	

	 		return false;			
		
		});



	});

		
</script>

