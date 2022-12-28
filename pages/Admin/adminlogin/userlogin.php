<?php

$username = $_POST['user'];
$password= $_POST['pass'];


include 'db.php';

$sql="(SELECT * FROM userlogindetails WHERE username ='$username' and password ='$password')";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if ($num==1) {
	session_start();
	$_SESSION['loggedin']=true;
	$_SESSION['user']=$username;

	header('location: ..\index.php');

}else{
	
		header('location: ../adminlogin/userinvalid.html');
		echo "<script> alert('Invalid Username and Password')</script>";
}

?>