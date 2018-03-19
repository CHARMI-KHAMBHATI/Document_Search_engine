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
	 
      <li class="active"><a href="CRUD.php">All docs</a></li>
	  <li class="active"><a href="uploadPage.php">Upload</a></li>
	  <li class="active"><a href="editPage.php">Edit </a></li>
	  
      <li class="active"><a href="logout.php">LogOut</a></li>
	 
	  
	 
	 
    </ul>
    <form class="navbar-form navbar-right" action="" method="post" autocomplete="on"> >
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search" id="search"  >
      </div>
	  <button type="submit" class="btn btn-default" id="submit" name ="submit" >Submit</button>
      
    </form>
  </div>
 
</nav> 
	
	
	
<?php

include("connection.php");

	
$fid=$_GET['fid'];

if(isset($_POST['edit'])){
	
	$sql= "select * from files natural join users where fid ='$fid'";
	$result=mysqli_query($conn, $sql);

	
	while($row=mysqli_fetch_array($result))
	{ 	
	
	?>
	<div class="container">
	<form class="form-horizontal"  action="" method="post"  style="padding:50px;">
	   <div class="form-group">
	   <label  class="control-label col-md-3">Edit content:</label>
	   </div>
	   <div class="form-group">
		<label for="title" class="control-label col-md-3">Title </label>
		<div class="col-md-6">
		<input type="text" name="title" id="title" class="form-control " value="<?php echo $row['ftitle'];?>">
		</div>
		</div>
  
	 
	  <div class="form-group">
	  <label for="description" class="control-label col-md-3">Description</label>
	  <div class="col-md-6">
	  <textarea  type="text" name="description" id="description" class="form-control" rows="15" ><?php echo $row['fdescription'];?></textarea>
	  </div>
	  </div>
	  
	  
	  <div class="form-group">
	  <label for="image" class="control-label col-md-3"></label>
	  <div class="col-md-6">
	  
	  <button type="submit" class="btn btn-success" id="submit" name ="submit" >Submit</button>
	
	  </div>
	  </div>

	 
	
	</form>
	</div>
<?php
break;

	}
	
}
	if (isset($_POST["submit"])) {
		$title=$_POST['title'];
		$body=$_POST['description'];
		echo $title;
		echo $body;
		
		$sql="UPDATE `files` SET `ftitle` = '$title', `fdescription` ='$body' WHERE fid='$fid'";
		$result=mysqli_query($conn, $sql);
			if($result)
			{
				$msg="file update successfull!";
				header("location:CRUD.php?msg=$msg");
			
			
			}
			else 
				echo "error".mysqli_error($conn);
	}
	
	



if(isset($_POST['delete'])){
	
	$sql="delete from `files` where fid='$fid'";
	$result=mysqli_query($conn, $sql);
			if($result)
			{
				
				$msg="file deleted successfull!";
				header("location:CRUD.php?msg=$msg");
			
			
			}
			else 
				echo "error".mysqli_error($conn);
}

?>

</body>
</html>
