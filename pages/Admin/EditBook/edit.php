<?php
include ("db.php");
  $id=$_GET['id'];
  $firstname= $_GET['first_name'];
  $lastname= $_GET['last_name'];
  $email= $_GET['email'];
  $address= $_GET['address'];
  $gender= $_GET['gender'];
  $contact= $_GET['contact'];
  $date= $_GET['date'];
  $time= $_GET['time'];
  $services= $_GET['services'];
  $staffs = $_GET['staffs'];
  $price =$_GET['price'];
  $timet = $_GET['timet'];

$dup=mysqli_query($conn,"SELECT * FROM abooking Where  date='$date'  and time='$time' and staffs='$staffs' ");

if (mysqli_num_rows($dup)> 0) 
{
  echo "<script>
      alert('The selected staff is booked already. PLease select other staffs below');
      window.location.href='index.php';
    </script>";
}
else{
  $sql= "UPDATE abooking set first_name='$firstname', last_name='$lastname', email='$email', address='$address', gender='$gender', contact='$contact', date='$date', time='$time', services='$services', staffs= '$staffs', price='$price', timet='$timet'  WHERE id='$id'";


  $result=mysqli_query($conn, $sql);

if ($result) {
  
  header('location:../ManageBooking.php');
}else{
    echo "<script> alert('Error Updating')</script>";
    }

}
?>