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


<div class="container">
	
	<form role="form" class="form-horizontal" id="file-form" action="upload.php" method="post" enctype="multipart/form-data" style="padding:50px;">
	   <div class="form-group">
		<label for="title" class="control-label col-md-3">Title for the file</label>
		<div class="col-md-6">
		<input type="text" name="title" id="title" class="form-control ">
		</div>
		</div>
  
	 
	  <div class="form-group">
	  <label for="description" class="control-label col-md-3">Provide a short description </label>
	  <div class="col-md-6">
	  <textarea  type="text" name="description" id="description" class="form-control" rows="5"></textarea>
	  </div>
	  </div>

	  <div class="form-group">
	  <label for="image" class="control-label col-md-3">Upload the file:</label>
	  <div class="col-md-6">
	  <input type="file" name="file" id="file" accept="*" class="form-control ">
	  
	  <br>
	  <input type="submit" name="submit" id="submit" class="btn btn-success" style="background-color: #333333; color: white;">
	
	  </div>
	  </div>
	
	</form>
	
</div>
    
</body>
</html>