<?php
include 'db.php';
error_reporting(0);
  $id= $_GET['id'];
  $query= "DELETE FROM staffsdetails WHERE id='$id' ";
  $data=mysqli_query($conn, $query);
  if ($data) {
  	header('location: ..\staffs.php');
  	echo "<font color ='red'>Record Deleted Successfully";
  }else{
  	echo "<font color ='green'>Error";
  }


?>