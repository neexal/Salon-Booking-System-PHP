<?php
include 'db.php';
error_reporting(0);
  $id= $_GET['id'];
  $query= "DELETE FROM userlogindetails WHERE id='$id' ";
  $data=mysqli_query($conn, $query);
  if ($data) {
    	echo "<script>
      alert('User deleted successfully');
      window.location.href='/SalonBookingTesting/pages/Admin/ManageUser.php';
    </script>";
  }else{
    echo "<font color ='green'>Error";
  }


?>