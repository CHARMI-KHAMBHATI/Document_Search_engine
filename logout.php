<?php

unset($_SESSION['username']);
//Destroy entire session
session_destroy();

//Redirect to homepage
header("Location:index.php");
?>