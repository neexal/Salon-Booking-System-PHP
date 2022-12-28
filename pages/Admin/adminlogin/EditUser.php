<?php

/*
This is a code for Edit
*/

  include ("db.php");
  error_reporting(0);
  $id= $_GET['id'];
  $fn= $_GET['fn'];
  $un= $_GET['un'];
  $em= $_GET['em'];
  $ad= $_GET['ad'];
  $gn= $_GET['gn'];
  $ps= $_GET['ps'];
?>

<?php

/*
This is a code for Update
*/

if($_GET['submit'])
{
  $id=$_GET['id'];
  $fullname= $_GET['fname'];
  $username= $_GET['user'];
  $email= $_GET['email'];
  $address= $_GET['address'];
  $gender= $_GET['gender'];
  $password= $_GET['pass'];

  $sql= "UPDATE userlogindetails set name='$fullname', username='$username', email='$email', address='$address', gender='$gender', password='$password' WHERE id='$id'";

  $result=mysqli_query($conn, $sql);

if ($result) {
    	echo "<script>
      alert('Record Updated Successfully');
      window.location.href='../ManageUser.php';
    </script>";
}else{
 echo "<script> alert('Error Updating')</script>";
  
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="EditUser.css">
</head>
<body>
	<div class="login-wrap">
	<div class="login-html">
		<form>
			<label for="tab-1" class="tab">EDit Details</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<div class="group">
						<input type="hidden" id="form2Example1" class="form-control" name="id" value="<?php echo $id?>" >
						<label for="fname" class="label">Full Name</label>
						<input id="fname" type="text" class="input" name="fname" value="<?php echo $fn?>">
					</div>
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" name="user" value="<?php echo $un?>">
					</div>
					<div class="group">
						<label for="email" class="label">Email</label>
						<input id="email" type="email" class="input" name="email" value="<?php echo $em?>">
					</div>
					<div class="group">
						<label for="address" class="label">Address</label>
						<input id="address" type="text" class="input" name="address" value="<?php echo $ad?>">
					</div>
					<div class="group">
						<label for="gender" class="label">Gender</label>
						<input id="gender" type="text" class="input" name="gender" value="<?php echo $gn?>">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" name="pass" value="<?php echo $ps?>">
					</div>
					<div class="group">
						<button type="submit" name="submit" type="submit" class="btn" value="Sign Up">Update</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

</body>
</html>