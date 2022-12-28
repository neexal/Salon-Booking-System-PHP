<?php
/*
This is a code for Update
*/
 session_start();
include ("db.php");
  $id=$_GET['id'];
  $password=$_GET['cpassword'];

if (empty($password)) {
  echo "<script>
      alert('Invalid password!!Password cannot be empty.');
      window.location.href='../Users/Profile.php';
    </script>";
}else {

	$update= "UPDATE userdetails set password='$password' WHERE id='$id' ";
  	$result=mysqli_query($conn, $update);

  	if ($result) {
	echo "<script>
      alert('Password changed Sucessfully.');
      window.location.href='../Users/Profile.php';
    </script>";
}else{
    echo "<script> alert('Error Updating')</script>";
}
}

?>