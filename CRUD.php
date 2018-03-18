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
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>        
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>                
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>
  
  
  
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
   <div class="container-fluid">
  <ul class="nav navbar-nav navbar-right">
	<li class="active">
          <a href="#" >Apply Filter </a></li>
   
       <li>  
	   <form class="navbar-form pull-left" action="" method="POST">
	   <div class="form-group">
      <select name="typ" id="typ"  class="form-control" style="width: 200px;">
		  <?php
		  include("connection.php");
		  session_start();
		  
		  $sql= "select distinct ftype from files ";
	$result=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($result))
	{
		
	?>
		<option value="<?php echo $row['ftype'];?>"><?php echo $row['ftype'];?></option>
		
		
	<?php }	  ?>
           
        </select> </div>
		<button type="submit" class="btn btn-dark btn-sm" id="submittyp" name ="submittyp" style="background-color: #333333; color: white;" >Type</button>
		</form></li> 
		
		 <li>  
	   <form class="navbar-form pull-left" action="" method="POST">
	   <div class="form-group">
	    <input type="text" class="form-control btn-sm" placeholder="Author" name="author" id="author"  >
      </div>
		<button type="submit" class="btn btn-dark btn-sm" id="auth" name ="auth" style="background-color: #333333; color: white;" >Author</button>
		</form></li> 
		
		<li>  
	   <form class="navbar-form pull-left" action="" method="POST">
	  
    
        
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control btn-sm" name="stm" id="stm"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
       
    
    
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control btn-sm" name="etm" id="etm" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            
    </div>

		<button type="submit" class="btn btn-dark btn-sm" id="duration" name ="duration" style="background-color: #333333; color: white;" >Uploaded Time</button>
		</form></li> 
		
		
		</ul>
        
		
  </div>
   
</nav> 

<!-- side navigation bar-->
<div class="row">
  <div class="col-sm-1">
    <div class="sidebar-nav">
     
    </div>
  </div>

  
  <div class="col-sm-10">


	<?php
		
	
	
		

$user_name= $_SESSION['username'];
		$sql= "SELECT * FROM `users` WHERE username like '$user_name'";
	$result=mysqli_query($conn, $sql);

	
	while($row=mysqli_fetch_array($result))
	{ 
$_SESSION['id'] = $row['uid'];
	}
	
			if (isset($_POST["submit"])) {
    $src=$_POST['search'];
	
	$sql= "select * from files natural join users where ftitle like '%{$src}%' or fdescription like '%{$src}%' order by ftime desc";
	
	
	?>
	<h2>You searched for "<?php echo $src?>"</h2>
	<?php
  }
 else if(isset($_POST["submittyp"])){
       $type=$_POST["typ"];
	   $sql= "SELECT * FROM `files` natural join users WHERE date(ftime) between '2018-03-10' and '2018-03-20' order by ftime desc";
   }
   else if(isset($_POST["auth"])){
       $unm=$_POST["author"];
	   $sql= "select * from files natural join users where username like '%{$unm}%' order by ftime desc";
   }
   
   else if(isset($_POST["duration"])){
       $stime=$_POST["stm"];
       $etime=$_POST["etm"];
	   $stime= date("Y-m-d", strtotime($stime));
	   $etime= date("Y-m-d", strtotime($etime));
	   
	   
	   
	  $sql= "SELECT * FROM `files` natural join users WHERE date(ftime) between '$stime' and '$etime' order by ftime desc " ;
   }
   
  else{
	  $src=" ";
	  $sql= "select * from files natural join users where ftitle like '%{$src}%' or fdescription like '%{$src}%' order by ftime desc";
	  
  }
	
	
	$result=mysqli_query($conn, $sql);

	$rowcount=mysqli_num_rows($result);
	if($rowcount==0){
		
		?>
	<h2>Sorry No Results found!</h2>
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
	<?php echo $row['ftime']."<br>";
	echo $row['email']."<br>";
	echo $row['username']."<br>";?>
	</h5>
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
<form >
<a href="<?php echo $row['fpath'];?>"  class="btn btn-info btn-xs">
          <span class="glyphicon glyphicon-save"></span> Download File</a>

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
<script type="text/javascript">
    $(function () {
		
        $('#datetimepicker6').datetimepicker();
		
		
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").setMinDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").setMaxDate(e.date);
        });
    });
</script>

</html>