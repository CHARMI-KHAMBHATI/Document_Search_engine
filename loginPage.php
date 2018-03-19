
<!DOCTYPE html>
<html>
    <head>
    <title>CherryTop</title>
	<link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
	</head>
	
	
	
	
    <body>
	<!-- Main navigation bar -->
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">CherryTop</a>
    </div>
	
    <ul class="nav navbar-nav navbar-right">
	 
      
      <li class="active"><a href="loginPage.php">LogIn</a></li>
	  <li class="active"><a href="registerPage.php">Register</a></li>
	  
	 
	 
    </ul>
    
  </div>
 
</nav> 
<?php
		
		if(isset($_GET['msg'])){
			$msg=$_GET['msg'];
	
		?><script>

    alert("<?php echo $msg; ?>");

</script>
<?php
		$msg="";
		unset($_GET['msg']);
		}?>
   
   <div class="container">
	
	<form role="form" class="form-horizontal" name="reg" id="file-form" action="login.php" method="post" onsubmit="return validateForm();" style="padding:50px;">
	
	
	<div class="form-group">
	  <label for="image" class="control-label col-md-3"></label>
	  <div class="col-md-6">
	  
	  <br>
	  <label for="title" class="control-label col-md-5">LogIN for registered Users</label>
	
	  </div>
	  </div>
	   <div class="form-group">
		<label for="title" class="control-label col-md-3">USERNAME: </label>
		<div class="col-md-6">
		<input type="text" name="username" id="username" class="form-control " required>
		</div>
		</div>
		
  
		<div class="form-group">
		<label for="title" class="control-label col-md-3">PASSWORD: </label>
		<div class="col-md-6">
		<input type="password" name="password" id="password" class="form-control " required>
		</div>
		</div>
	 
		
	  

	  <div class="form-group">
	  <label for="image" class="control-label col-md-3"></label>
	  <div class="col-md-6">
	  
	  <br>
	  <input type="submit" name="submit" id="submit" class="btn btn-success" style="background-color: #333333; color: white;">
	
	  </div>
	  </div>
	
	</form>
	
</div>
</body>

</html>
