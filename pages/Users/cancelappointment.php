<?php
include 'db.php';
error_reporting(0);
  $id= $_GET['id'];
  $query= "DELETE FROM abooking WHERE id='$id' ";
  $data=mysqli_query($conn, $query);
  if ($data) {
  	
  	echo "<script>
  	alert('Your Booking is cancelled sussfully');
      window.location.href='UsersBooking.php';
    </script>";
  }else{
  	echo "<font color ='green'>Error";
  }


?>