<?php
include 'db.php';
$fullname= $_POST['fname'];
$username= $_POST['user'];
$email= $_POST['email'];
$address= $_POST['address'];
$gender= $_POST['gender'];
$password= $_POST['pass'];



$udup=mysqli_query($conn,"SELECT * FROM userlogindetails Where  username='$username'");
$dup=mysqli_query($conn,"SELECT * FROM userlogindetails Where  email='$email'");

if (mysqli_num_rows($dup)> 0) {
	echo "<script>
      alert('Email is already registerd');
      window.location.href='userlogin.html';
    </script>";
}elseif (mysqli_num_rows($udup)> 0) {
	echo "<script>
      alert('The username is already taken. Please provide new username');
      window.location.href='userlogin.html';
    </script>";
}else{

	$sql=  "INSERT INTO userlogindetails (name, username, email, address, gender, password) VALUES ('$fullname','$username','$email','$address','$gender', '$password')";
			$result=mysqli_query($conn, $sql);
    if ($result) {
    	echo "<script>
      			alert('Successfully Registered. Redirecting to Usermanagement page');
      			window.location.href='/SalonBookingTesting/pages/Admin/ManageUser.php';
    		</script>";
    	# code...
    }
}

?>

?>