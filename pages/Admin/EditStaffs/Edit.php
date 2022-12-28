<?php

include 'db.php';

$name= $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$contact= $_POST['contact'];
$description= $_POST['description'];
$image= $_POST['image'];
$gender = $_POST['gender'];

$sql= "INSERT INTO staffsdetails (name, email, address, contact, description, image, gender) VALUES ('$name','$email','$address','$contact', '$description', '$image', '$gender')";

$result=mysqli_query($conn, $sql);


if ($result) {
	
	header('location:staffs.html');
}


?>