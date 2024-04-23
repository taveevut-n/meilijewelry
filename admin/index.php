<?php include('global_admin.php'); 
	 if(isset($_SESSION["login"]) == true){
		header("Location: index2.php");
    }
?>
<?php
	if(isset($_POST["submit"])){
	$q="SELECT * FROM `staff` WHERE staff_username='".$_POST['username']."' AND staff_password='meili99#' ";
	$db->query($q);
	if($db->num_rows()>0){
		$_SESSION['login']=$db->f(staff_id);
		redi4('index2.php');
	}
	redi2();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    	.inner{
    		position: relative;
    		float: left;
    		margin-left: 25%;
    		margin-top:50px;
    		width: 500px;
    	}
    	.panel-default{
    		margin: auto;
    		width: 500px;
    		margin-top: 50px;
    	}
    	#submit{
    		float: right;
    	}
    </style>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
		  <div class="panel-body">
			<form method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="text" class="form-control" autocomplete="off" name="username" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="password" placeholder="Password">
			  </div>
			  <button type="submit" name="submit" class="btn btn-default" id="submit">Submit</button>
			</form>
		  </div>
		</div>
	</div>
</body>
</html>
