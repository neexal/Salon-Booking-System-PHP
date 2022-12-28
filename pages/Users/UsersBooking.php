<?php
/*
CODE FOR DISPLAYING USERNAME
*/

  session_start();
  if (!isset($_SESSION['login']) ||$_SESSION ['login']!=true){
  header('location: \signin.html');
  exit;
}
?>

<?php
include ("db.php");
$userid= $_SESSION['user'];
$userquery=mysqli_query($conn, "SELECT * FROM userdetails where username='$userid' ");
$row=mysqli_fetch_array($userquery);
$id=$row ["id"];

  $query="Select * from abooking where user_id='$id' ";
  $data= mysqli_query($conn,$query);
?>
<?php
  include ("db.php");
  $query="Select * from userdetails where username='$_SESSION[user]'";
  $userdata= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($userdata);
        
?>
<!DOCTYPE>
<html>
<head>
<title>Online Booking</title>
<meta charset="utf-8">
<link href="css\layout\styles\UsersBooking.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <nav id="mainav"> 
    <!-- ################################################################################################ -->
    <ul id="nav" class="clear">
      <li><a href="index.php">Home</a></li>
      <li><a href="BookOnline\index.php">Book Online</a></li>
      <li class="active"><a href="UsersBooking.php">My Bookings</a></li>
      <li><a href="staffs.php">Staffs</a></li>
       <li><a href="Profile.php">Change Password</a></li>
        <li id="activestatus" style="position: relative; left: 200px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i>Welcome <?php echo $row['name']?></li>
      <li><a href="../userlogin/logout.php" style="position: relative; left: 200px;">Log out</a></li> 
    </ul>
    <!-- ################################################################################################ --> 
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1 bgded" style="background-image:url('../Admin/BookOnline/images/demo/backgrounds/12.jpg')">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div>
      <p class="header-para"></p>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
 <div class="t-container">
        <div class="regform">My Bookings</div>
        <table class="table">
          <thead class="thead">
            <tr>
              <th>User Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Services</th>
              <th>Staffs</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody class="tbody">
            <?php
              while ($result= mysqli_fetch_array($data))
              {
            ?>
            <tr class="active-row">
              <td><?php echo $row['name'];?></td>
              <td><?php echo $result['date'];?> </td>
              <td><?php echo $result['time'];?> </td>
              <td><?php echo $result['services'];?> </td>
              <td><?php echo $result['staffs'];?> </td>
              <td><?php echo $result['price'];?> </td>
              <td>
               <a href="..\Users\cancelappointment.php?id=<?php echo $result['id'];?>" class="btndelete">Cancel Appointment</a>
              </td> 
            </tr>
         <?php 
           }
          ?>
          </tbody>
          
        </table>
      </div>
    <!-- ################################################################################################ --> 
    <!-- / container body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <h1 class="font_xxl nospace uppercase">Need Assistance?</h1>
    <p class="btmspace-30">Connect with us through email, facebook, tiwtter, instagram and other various platfroms</p>
    <ul class="faico clear">
      <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
      <li><a class="faicon-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
    </ul>
    <!-- ################################################################################################ --> 
  </footer>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Prakash Ghimire</a></p>
    <!-- ################################################################################################ --> 
  </div>
</div>
</body>
</html>
