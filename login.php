

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


include("connection.php");

$user_name=$_POST["username"];
$user_password=$_POST["password"];

$mysql_qry="select * from users where username like '$user_name' and password like '$user_password'";
$result = mysqli_query($conn, $mysql_qry);


if(mysqli_num_rows($result) > 0)
{
	session_start();
	$_SESSION['username'] = $user_name;
header("location:CRUD.php");
}
else 
{
	$flag=0;
	$msg="Error while login , please check username OR password";
	
	header("location:loginPage.php?msg=$msg");
}


?>


   </body>
   </html>
