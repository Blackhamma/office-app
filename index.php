

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IT SUPPORT</title>
	<link rel="shortcut icon" type="image" href="images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/roboto.css">
	<link rel="stylesheet" type="text/css" href="web/css/fontawesome-all.min.css">
</head>
<body>
	
		<div class="container">
			<div class="col-md-6 col-sm-4 col-md-offset-3" style="margin-top: 100px;">
				<div class="panel panel-default">
					<div class="panel-heading">
				  		<h3 class="panel-title">Login | User Management System</h3>
					</div>
					<div class="panel-body">
				    	<form action="inc/login.inc.php" method="POST" class="form-horizontal">
				    	  <div class="form-group">
				    	    <label for="Username" class="col-sm-2 control-label">Username</label>
				    	    <div class="col-sm-10">
				    	      <input type="text" name="uid" class="form-control" id="login_uid" placeholder="Username">
				    	    </div>
				    	  </div>
				    	  <div class="form-group">
				    	    <label for="password" class="col-sm-2 control-label">Password</label>
				    	    <div class="col-sm-10">
				    	      <input type="password" name="pwd" class="form-control" id="login_pwd" placeholder="Password">
				    	    </div>
				    	  </div>
				    	  <div class="form-group">
				    	    <div class="col-sm-offset-2 col-sm-10">
				    	      <div class="checkbox">
				    	        <label>
				    	          <input type="checkbox"> Remember me
				    	        </label>
				    	      </div>
				    	    </div>
				    	  </div>
				    	  <div class="form-group">
				    	    <div class="col-sm-offset-2 col-sm-10">
				    	      <button type="submit" class="btn btn-primary" name="loginBtn">Login</button>
				    	    </div>
				    	  </div>
				    	</form>
					</div>
				</div>
			</div>
		</div>

 
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>