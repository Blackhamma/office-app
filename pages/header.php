<?php 
	require '../inc/db.inc.php'; 
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IT SUPPORT</title>
	<link rel="shortcut icon" type="image" href="../images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link href="../css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/roboto.css">
	<link rel="stylesheet" type="text/css" href="../web/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.min.css">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	 <script src="../js/jQuery.min.js"></script>
	 <!-- Include all compiled plugins (below), or include individual files as needed -->
	 <script src="../js/bootstrap.min.js"></script>
	 <script src="../js/bootstrap-toggle.min.js"></script>
	 <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
	 <script type="text/javascript" src="../js/dataTables.bootstrap.min.js"></script>
	 <script type="text/javascript">
	 	
	 </script>
		 
</head>
<body>


	<div class="header">
	  <div class="container-fluid">
	  	<div class="row">
	  		<div class="col-md-2 col-sm-2 col-xs-2"><img src="../images/logo.jpg" alt="lands commission logo" width="50%" height="50%" class="img-responsive img-circle border" style="margin-left: 50px;"></div>
	  		<div class="col-md-8" id="title"> <h1>USER COMPLAINT MANAGEMENT SYSTEM</h1></div>
	  		<div class="col-md-2">
		    	<div class="dropdown pull-right" id="optionbtn">
				  <button class="btn btn-default dropdown-toggle" type="button" id="wel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Welcome,<?php if (isset($_SESSION['userName'])) {
				    	echo $_SESSION['userName'];
				    } ?>
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#" data-toggle="modal" data-target="#profile">Change Password</a></li>
				    <li role="separator" class="divider"></li>
				    <li><a href="../inc/logout.inc.php" style="text-align: center;">Logout</a></li>
				  </ul>
				</div>
			</div>
		 </div>
	   </div>
	</div><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-sm-2" style="text-align: center;">
				<!-- <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#newForm">New Form</button> -->
							
			</div>

			<div class="col-md-10 col-sm-10">
				<ul class="nav nav-tabs nav-justified">
				  <li role="presentation" class="<?php if ($currentPage == 'dashboard'){ echo 'active';} ?>"><a href="dash.php"><span class="fas fa-tachometer-alt"></span> Dashboard</a></li>
				  <li role="presentation" class="<?php if ($currentPage == 'uncomplete'){ echo 'active';} ?>"><a href="uncomplete.php"><span class="fas fa-folder-open"></span> Uncomplete</a></li>
				  <li role="presentation" class="<?php if ($currentPage == 'complete'){ echo 'active';} ?>"><a href="complete.php"><span class="fas fa-folder"></span> Complete</a></li>
				  <li role="presentation" class="<?php if ($currentPage == 'transfers'){ echo 'active';} ?>"><a href="transfers.php"><span class="fas fa-exchange-alt"></span> Transfers</a></li>
				</ul>
			</div>
		</div>
	</div>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2" style="margin-top: 10px;">
				<div class="list-group">
				  <a href="users.php" class="list-group-item <?php if ($currentPage == 'user'){ echo 'active';} ?>"><span class="fas fa-users"></span> 
				    Users
				  </a>
				  <a href="reports.php" class="list-group-item <?php if ($currentPage == 'report'){ echo 'active';} ?>"><span class="fas fa-file"></span> Report</a>
				  <br>
				   <a href="#" class="list-group-item" data-toggle="modal" data-target="#AddData" style="text-align: center";> New Form</a>
				</div>
			</div>
			<div class="col-md-10">
		

	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>


</body>
</html>





<!-- Add form modal-->
<div class="modal fade" id="AddData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New Form</h4>
      </div>
      <div class="modal-body">
      	<!-- action="../inc/saveForm.inc.php"  -->
        <form  method="post" id="insert_formdata">
        	<div class="row">
        		<div class="col-md-6">
		        	<div class="form-group">
		        		<label for="num">NUMBER</label>
		        		<input type="text" name="num" id="num" class="form-control" placeholder="NUMBER" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="date">DATE</label>
		        		<input type="date" name="created" id="created" class="form-control" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="srl">SERIAL NUMBER</label>
		        		<input type="text" name="srl" id="srl" class="form-control">
		        	</div>
		        	<div class="form-group">
		        		<label for="authorized">AUTHORIZED BY</label>
		        		<input type="text" name="authorized" id="authorized" class="form-control" placeholder="Authorized by">
		        	</div>
		        	<div class="form-group">
		        		<label for="prob">PROBLEM</label>
		        		<textarea cols="4" rows="4" class="form-control" name="prob" id="prob"></textarea>
		        	</div>
		        </div>
		        <div class="col-md-6">
		        	<div class="form-group">
		        		<div class="row">
		        			<div class="col-md-6">
				        		<label for="div">DIVISION</label>
				        		<select class="form-control" name="div" id="div">
				        			<option></option>
				        			<option value="PVLMD">PVLMD</option>
				        			<option value="LVD">LVD</option>
				        			<option value="SMD">SMD</option>
				        			<option value="LRD">LRD</option>
				        		</select>
				        	</div>
				        	<div class="col-md-6">
				        		<label for="office">OFFICE</label>
				        		<input type="text" name="office" id="office" class="form-control" placeholder="OFFICE">
				        	</div>
				        </div>
		        	</div>
		        	<div class="form-group">
		        		<label for="decrip">DESCRIPTION</label>
		        		<select class="form-control" name="descrip" id="descrip">
		        			<option></option>
		        			<option value="System Unit">System Unit</option>
		        			<option value="Monitor">Monitor</option>
		        			<option value="Printer">Printer</option>
		        			<option value="Keyboard">Keyboard</option>
		        			<option value="UPS">UPS</option>
		        			<option value="Others">Others</option>
		        		</select>
		        	</div>
		        	<div class="form-group">
		        		<label for="uid">USER</label>
		        		<input type="text" name="username" id="username" class="form-control" placeholder="User's Name">
		        	</div>
		        	<div class="form-group">
		        		<div class="row">
				        	<div class="col-md-6">
				        		<label for="Officer">IT OFFICER</label>
				        		<input type="text" name="officer" class="form-control" value="<?php if (isset($_SESSION['userName'])) {
						    	echo $_SESSION['userName'];} ?>" >
				        	</div>
				        	<div class="col-md-6">
				        		<label for="transfers">TRANSFER</label>
				        		<select class="form-control" id="transfer" name="transfer">
				        			<option></option>
				        			<option value="Jona">Jona</option>
				        			<option value="Ferdinand">Ferdinand</option>
				        		</select>
				        	</div>
				        </div>
				    </div>
		        	<div class="form-group">
		        		<label for="diag">DIAGONOSIS</label>
		        		<textarea cols="4" rows="4" class="form-control" name="diag" id="diag"></textarea>
		        	</div>
		    	</div>
		    </div>
        	<div class="modal-footer">
        		<input type="submit" name="printFormBtn" class="btn btn-primary pull-left" value="Print" id="print"> 
        		<input type="hidden" name="form_id" id="form_id"> 
        		<input type="submit" class="btn btn-success" name="formSave" value="Save" id="formSave">
      		</div>
      	</form>
      </div>
    </div>
  </div>
</div><!--End form modal-->

<!--update form modal-->
<!--
<div class="modal fade" id="updateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Form</h4>
      </div>
      <div class="modal-body">
        <form id="updateFormform" method="post">
        	<div class="row">
        		<div class="col-md-6">
		        	<div class="form-group">
		        		<label for="num">NUMBER</label>
		        		<input type="text" name="num" id="num" class="form-control" placeholder="NUMBER" required="required" disabled>
		        	</div>
		        	<div class="form-group">
		        		<label for="date">DATE</label>
		        		<input type="date" name="created" id="created" class="form-control" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="slr">SERIAL NUMBER</label>
		        		<input type="text" name="srl" id="srl" class="form-control" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="authorized">AUTHORIZED BY</label>
		        		<input type="text" name="authorized" id="authorized" class="form-control" placeholder="Authorized by" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="prob">PROBLEM</label>
		        		<textarea cols="4" rows="4" class="form-control" required="required" name="prob" id="prob"></textarea>
		        	</div>
		        </div>
		        <div class="col-md-6">
		        	<div class="form-group">
		        		<div class="row">
		        			<div class="col-md-6">
				        		<label for="div">DIVISION</label>
				        		<select class="form-control" name="div" id="div">
				        			<option value="PVLMD">PVLMD</option>
				        			<option value="LVD">LVD</option>
				        			<option value="SMD">SMD</option>
				        			<option value="LRD">LRD</option>
				        		</select>
				        	</div>
				        	<div class="col-md-6">
				        		<label for="office">OFFICE</label>
				        		<input type="text" name="office" id="office" class="form-control" placeholder="OFFICE" required="required">
				        	</div>
				        </div>
		        	</div>
		        	<div class="form-group">
		        		<label for="decrip">DESCRIPTION</label>
		        		<select class="form-control" name="descrip" id="descrip">
		        			<option value="System Unit">System Unit</option>
		        			<option value="Monitor">Monitor</option>
		        			<option value="Printer">Printer</option>
		        			<option value="Keyboard">Keyboard</option>
		        			<option value="UPS">UPS</option>
		        			<option value="Others">Others</option>
		        		</select>
		        	</div>
		        	<div class="form-group">
		        		<label for="uid">USER</label>
		        		<input type="text" name="useruid" id="useruid" class="form-control" placeholder="User's Name" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="Officer">IT OFFICER</label>
		        		<input type="text" name="officer" id="officer" class="form-control" placeholder="JONA" required="required">
		        	</div>
		        	<div class="form-group">
		        		<label for="diag">DIAGONOSIS</label>
		        		<textarea cols="4" rows="4" class="form-control" id="diag" name="diag" required="required"></textarea>
		        	</div>
		    	</div>
		    </div>
        	<div class="modal-footer">
        		<input type="submit" name="printUpdateFormBtn" class="btn btn-primary" value="Print">
        		<input type="submit" name="updateFormBtn" id="updateFormBtn" class="btn btn-success" value="Save">
      		</div>
      		<input type="hidden" name="formId" id="formId">

      	</form>
      </div>
    </div>
  </div>
</div> --><!--End update form modal-->

<!--view modal-->
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Details</h4>
      </div>
      <div class="modal-body" id="formDetails">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><!--End formDetails form modal-->

<!-- Add user modal-->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">New User</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="../inc/addUser.inc.php" method="POST">
          <div class="form-group">
            <label for="uid_first" class="col-md-3 control-label">First Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="uid_first" placeholder="First Name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="uid_last" class="col-md-3 control-label">Last Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="uid_last" name="uid_last" placeholder="Last Name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="uid" class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="user_uid" name="user_uid" placeholder="Username" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="uid_pwd" class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" id="uid_pwd" name="uid_pwd" placeholder="Password" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="role" class="col-md-3 control-label">Role</label>
            <div class="col-md-4">
              <select class="form-control" name="role">
              	<option value="Administrator">Administrator</option>
              	<option value="IT Officer">IT Officer</option>
              	<option value="NSP">NSP</option>
              	<option value="OTHERS">Others</option>
              </select>
            </div>
          
          <div class="form-group">
            	<label for="status" class="col-md-1 control-label">Status</label>
	            <div class="col-md-3">
	            	<input type="checkbox" name="togglebtn" checked data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-width="100" data-onstyle="success"  data-offstyle="danger">
	            </div>
	       </div>
	   </div>
          <div class="modal-footer">
            <button type="submit" name="addUserBtn" class="btn btn-success">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end add user modal-->

<!--update user modal-->
<div class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit user</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="updateUserform" class="form-horizontal">
          <div class="form-group">
            <label for="uid_first" class="col-md-3 control-label">First Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" placeholder="First Name" id="firstName">
            </div>
          </div>
          <div class="form-group">
            <label for="uid_last" class="col-md-3 control-label">Last Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="lastName" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <label for="uid" class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="userName" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label for="pwd" class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="userpwd" id="userpwd" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <label for="role" class="col-md-3 control-label">Role</label>
            <div class="col-md-4">
              <select class="form-control" id="role" name="rol">
              	<option value="Administrator">Administrator</option>
              	<option value="IT Officer">IT Officer </option>
              	<option value="NSP">NSP</option>
              	<option value="OTHERS">Others</option>
              </select>
            </div>

            <div class="form-group">
            	<label for="status" class="col-md-1 control-label">Status</label>
	            <div class="col-md-3">
	            	<input type="checkbox" name="status" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-width="100" data-onstyle="success"  data-offstyle="danger" id="status">
	            </div>
	        </div>
	        <input type="hidden" class="form-control" id="userId">
          </div>
          
          <div class="modal-footer">
        	<button type="submit" class="btn btn-success" id="updateUserBtn" name="update">Update</button>
      	  </div>
  		</form>
      </div>
      
    </div>
  </div>
</div><!--End updateuser-->

<!-- change user pwd-->
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
      </div>
      <div class="modal-body">
        <form action="#" method="post" class="form-horizontal" id="pwresetform">
          <div class="form-group">
            <label for="old_pwd" class="col-md-3 control-label">Old Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="old_pwd" id="old_pwd" placeholder="Old Password">
            </div>
          </div>
          <div class="form-group">
            <label for="new_pwd" class="col-md-3 control-label">New Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="new_pwd" id="new_pwd" placeholder="New Password">
            </div>
          </div>
          <div class="form-group">
            <label for="Cpwd" class="col-md-3 control-label">Confirm New Password</label>
            <div class="col-md-9">
              <input type="password" class="form-control" name="Cpwd" id="Cpwd" placeholder="Confirm New Password">
            </div>
          </div>

      </div>
          
          <div class="modal-footer">
        	<button type="submit" class="btn btn-success" name="reset" id="pwreset">Reset</button>
      	  </div>
  		</form>
      </div>
      
    </div>
  </div>
</div><!--End chg user pwd-->


<div class="modal fade" id="View_data">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Form Details</h4>
			</div>
			<div class="modal-body" id="form_details">
				
			</div>
			<div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


