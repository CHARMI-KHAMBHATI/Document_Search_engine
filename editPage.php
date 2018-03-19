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
    
  </div>
 
</nav> 

<div class="w3-container w3-light">

	<?php
		
	include("connection.php");
	session_start();
	
	$uid=$_SESSION['id'];
	
	
	
	$sql= "select * from files  where uid ='$uid' order by ftime desc";
	$result=mysqli_query($conn, $sql);

	$rowcount=mysqli_num_rows($result);
	if($rowcount==0){
		
		?>
	<h2>Sorry No Uploads yet!</h2>
	<?php
	}
	
	while($row=mysqli_fetch_array($result))
	{ 
?>

	<div class="w3-hover-shadow " >	
	 <div class="w3-container w3-light">
	 <hr>
	 
	 <h2>
	 <?php
	echo $row['ftitle']."<br>";?>
	</h2>
	<h5>
	<?php echo $row['ftime']."<br>";?>
	</h>
	<div class="w3-container " >
	
	<h4>
	<?php
	echo $row['fdescription']."<br>"; ?>
	</h4>
	</div>
	
	<h4>
	<br>
	<br>
	
	</h4>
		
</div>

<div>
<center>
<form action="edit_del.php?fid=<?php echo $row['fid']?>" method="post">
<a href="<?php echo $row['fpath'];?>"  class="btn btn-info btn-xs">
          <span class="glyphicon glyphicon-save"></span> Save</a>
<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit" id="edit">edit <span class="glyphicon glyphicon-pencil"></span></button>
	<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete" id="delete">delete <span class="glyphicon glyphicon-trash"></span></button>
 
	</form>
</center>
	</div>
	<hr>
	</div>
	
<?php
	
	echo "<br>";
	echo "<br>";?>
<?php
	}?>
	
</div>
		
 
    
</body>
</html>
