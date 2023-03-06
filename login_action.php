<?php 
include ('lb.php');
$email =  mysqli_real_escape_string($mysqli , $_POST['email']);
$password = mysqli_real_escape_string($mysqli , $_POST['password']);
$qry      = "SELECT * FROM text WHERE email = '".$_POST['email']."' 
                                 AND   password = '".$_POST['password']."'";							 
$result   = $mysqli->query($qry);
$num      = mysqli_num_rows($result);
if ($num == 0) 
{
	header("Location:login.php?msg=2");
}
else 
{
	if ($row = mysqli_fetch_array($result)) 
	{  
		  $_SESSION['login'] = $row['email'];
		  header("Location:wel.php");
	}
}
?>