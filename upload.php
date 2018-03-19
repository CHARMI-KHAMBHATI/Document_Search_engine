<?php



include("connection.php");
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
$name=$_FILES["file"]["name"];
$title=$_POST["title"];

$descp=$_POST["description"];

$uid=$_SESSION['id'];
echo $uid;

if(!empty($_FILES['file']['name']))
{
	
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	
	

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
		{
			
			$sql="INSERT INTO files(uid,ftitle,fdescription,fpath,ftype) VALUES('$uid','$title','$descp','$target_file','$FileType')";
			$result=mysqli_query($conn, $sql);
			if($result)
			{
				$msg="file upload successfull!";
				header("location:CRUD.php?msg=$msg");
			
			}
			else echo "error with pic".mysqli_error($conn);
		
			
		}  
		
		else 
		{
			echo "Sorry, there was an error uploading your file.";
		}
	}
}

?>
