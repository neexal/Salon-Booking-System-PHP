<?php

include 'db.php';

$firstname= $_POST['first_name'];
$lastname= $_POST['last_name'];
$email= $_POST['email'];
$address= $_POST['address'];
$gender= $_POST['gender'];
$contact= $_POST['contact'];
$date= $_POST['date'];
$time= $_POST['time'];
$services= $_POST['services'];
$staffs = $_POST['staffs'];
$price =$_POST['price'];
$timet = $_POST['timet'];


$dup=mysqli_query($conn,"SELECT * FROM abooking Where  date='$date'  and time='$time' and staffs='$staffs' ");

if (mysqli_num_rows($dup)> 0) 
{
	echo "<script>
			alert('The selected staff is booked already. PLease select other staffs below');
			window.location.href='Bookonline.php';
		</script>";
}
else{

	$sql= "INSERT INTO abooking (first_name, last_name, email, address, gender, contact, date, time, services, staffs, price, timet) VALUES ('$firstname','$lastname','$email','$address','$gender', '$contact' ,'$date','$time','$services', '$staffs', '$price', '$timet')";

	$result=mysqli_query($conn, $sql);

		if ($result) {
			
			header('location:Booked.php');
			 echo "<script> alert('Record Updated Successfully')</script>";
		}
		else{

		 echo "<script> alert('Error Updating')</script>";
		}

}
?>