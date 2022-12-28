<?php  

include 'db.php';

$name = $_POST["name"];
$username= $_POST["username"];
$email= $_POST["email"];
$password = $_POST["password"];

$udup=mysqli_query($conn,"SELECT * FROM userdetails Where  username='$username'");
$dup=mysqli_query($conn,"SELECT * FROM userdetails Where  email='$email'");


if (empty($username) || empty($name) || empty($username) || empty($password)  || empty($email)) {
   echo "<script>
      alert('Invalid detail!!Check all the fields properly.');
      window.location.href='signin.html';
    </script>";

}elseif (mysqli_num_rows($dup)> 0) {
  echo "<script>
      alert('Email is already registerd');
      window.location.href='singin.html';
    </script>";
    
}elseif (mysqli_num_rows($udup)> 0) {
  echo "<script>
      alert('The username is already taken. Please provide new username');
      window.location.href='signin.html';
    </script>";
  # code...
}else{

	$sql= "INSERT INTO userdetails (name, username, email, password) VALUES ('$name','$username','$email','$password')";
	$result=mysqli_query($conn, $sql);
	
    if ($result) {
    	echo "<script>
      			alert('Successfully Registered. Redirecting to login page');
      			window.location.href='signin.html';
    		</script>";
    	# code...
    }
}

?>




















