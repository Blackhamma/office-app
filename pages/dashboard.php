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
		                <td data-target='uid'><?php echo  $row['uid']; ?></td>
		                <td data-target='descrip'><?php echo  $row['descrip']; ?></td>
		     			<td>
		     			<a  data-role="update" data-id = <?php echo $row['id']; ?> class="btn btn-xs btn-success" ><i class='fas fa-pencil-alt'  data-toggle="tooltip"  data-placement="bottom" title="Edit"></i></a>
		     			 <a href=../inc/deleteform.inc.php?id=<?php echo $row['id']; ?> name='delete' onclick="dlt(<?php echo $row['id']; ?>)" class="btn btn-xs btn-danger" ><i class='fas fa-trash'  data-toggle="tooltip"  data-placement="bottom" title="Delete"></i></a></td>
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

		$(document).on('click', 'a[data-role=update]', function(){	
			var id = $(this).data("id");

			var num = $('#'+id).children('td[data-target=num]').text();
			var created = $('#'+id).children('td[data-target=created]').text();
			var uid = $('#'+id).children('td[data-target=uid]').text();
			var descrip = $('#'+id).children('td[data-target=descrip]').text();

			$('#num').val(num);
			$('#created').val(created);
			$('#descrip').val(descrip);
			$('#useruid').val(uid);
			$('#formId').val(id);
			$('#updateForm').modal('toggle');
		
		});


		$('#updateFormform').on('submit',function(e){
			$(e).preventDefault();
			var id = $('#formId').val();
			var created = $('#created').val();
			var srl = $('#srl').val();
			var authorized = $('#authorized').val();
			var div = $('#div').val();
			var office = $('#office').val();
			var descrip = $('#descrip').val();
			var useruid = $('#useruid').val();
			var officer = $('#officer').val();
			var prob = $('#prob').val();
			var daig = $('#diag').val();

			$.ajax({
				url    : '../inc/updateForm.inc.php',
				method : 'POST',
				data   : {created : created, srl : srl, authorized : authorized, division : div, office : office, descrip : descrip, uid : useruid, officer : officer, prob : prob, diag : diag, id : id},
				success:function(response){
					$('#'+id).children('td[data-target=num]').text(num);
					$('#'+id).children('td[data-target=created]').text(created);
					$('#'+id).children('td[data-target=descrip]').text(descrip);
					$('#'+id).children('td[data-target=useruid]').text(useruid);
	 				
	 				$('#updateForm').modal('toggle');
				}
 
			});

		});


	});




</script>


