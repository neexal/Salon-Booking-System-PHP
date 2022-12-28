<?php

$username = $_POST['username'];
$password= $_POST['password'];

include 'db.php';

if (empty($username) || empty($password)) {
   echo "<script>
      alert('Invalid detail!! Username or password cannot be empty.');
      window.location.href='signin.html';
    </script>";
}

$sql="(SELECT * FROM userdetails WHERE username ='$username' and password ='$password')";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if ($num==1) {
	session_start();
	$_SESSION['login']=true;
	$_SESSION['user']=$username;

	echo "<script>
      window.location.href='../index.php';
    </script>";
}else{
	
	echo "<script>
      		alert('Invalid Username and Password');
      		window.location.href='../userlogin/signin.html';
    	</script>";	
    }
?>
