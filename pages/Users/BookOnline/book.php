<?php

include 'db.php';
include 'config.php';

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
$token = $_POST["stripeToken"];
$token_card_type = $_POST["stripeTokenType"];

$price_int = preg_replace('/[^0-9]/', '', $price);
$amt = intval($price_int)/130;	
$amount = round($amt,2);

$charge = \Stripe\Charge::create([
	// "amount" => str_replace(",","",$amount) * 100,
	"amount" => $amount*100,    
	"currency" => 'usd',
	"description"=>'Saloon booking System',
	"source"=> $token,
  ]);

 if (empty($time)) {
  echo "<script>
      alert('Please select appropriate date and time.');
      window.location.href='index.php';
    </script>";
 }


if (empty($staffs) || empty($services)) {
   echo "<script>
      alert('Please check services or staff.');
      window.location.href='index.php';
    </script>";
}

session_start();

$userid= $_SESSION['user'];
$userquery=mysqli_query($conn, "SELECT * FROM userdetails where username='$userid' ");
$row=mysqli_fetch_array($userquery);
$id=$row ["id"];



$dup=mysqli_query($conn,"SELECT * FROM abooking Where  date='$date'  and time='$time' and staffs='$staffs' ");

if (mysqli_num_rows($dup)> 0) 
{
	echo "<script>
			alert('The selected staff is booked already. PLease select other staffs below');
			window.location = 'index.php';
		</script>";
}
else{
	if($charge){
	// header("Location:booked.php?amount=$amount");


	$sql= "INSERT INTO abooking (first_name, last_name, email, address, gender, contact, date, time, services, staffs, price, timet, user_id, token, token_type) VALUES ('$firstname','$lastname','$email','$address','$gender', '$contact' ,'$date','$time','$services', '$staffs', '$price', '$timet','$id','$token','$token_card_type')";

	$result=mysqli_query($conn, $sql);

		if ($result) {
			
			 echo "<script> alert('Booked Appointment Successfully')
			 	window.location = 'Booked.php';
			 </script>";
		}
		else{

		 echo "<script> alert('Error Updating')</script>";
		}
	}
}
?>