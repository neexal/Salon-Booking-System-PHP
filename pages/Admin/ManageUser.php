<?php
/*
CODE FOR DISPLAYING USERNAME
*/
  session_start();
  if (!isset($_SESSION['loggedin']) ||$_SESSION ['loggedin']!=true){
  header('location: ..\userlogin.html');
  exit;
}
?>


<?php
/*
CODE FOR DISPLAYING DATA
*/
  include ("db.php");
  $query="Select * from userlogindetails";
  $data= mysqli_query($conn,$query);

?>

<!DOCTYPE>
<html>
<head>
<title>Online Booking</title>
<meta charset="utf-8">
<link href="\SalonBooking\pages\Admin\css\layout\styles\ManageUser.css" rel="stylesheet" type="text/css" media="all">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
<link href="\SalonBookingTesting\pages\Admin\css\layout\styles\Manage.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <nav id="mainav"> 
    <!-- ################################################################################################ -->
    <ul id="nav" class="clear">
      <li><a href="..\Admin\index.php">Home</a></li>
      <!-- <li><a href="..\Admin\BookOnline\Bookonline.php">Book Online</a></li> -->
      <li><a href="..\Admin\ManageBooking.php">Manage Appointment</a></li>
      <li class="active"><a href="..\Admin\ManageUser.php">Manage User</a></li>
      <li><a href="..\Admin\staffs.php">Manage Staffs</a></li>
      <li id="activestatus" style="position: relative; left: 120px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i><?php echo $_SESSION['user']?></li>
      <li><a href="../Admin/adminlogin/userlogout.php" style="position: relative;bottom: 70px; left: 41em;">Log out</a></li>
    </ul>
    <!-- ################################################################################################ --> 
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1 bgded" style="background-image:url('../Admin/BookOnline/images/demo/backgrounds/14.jpg')">
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
        <div class="regform">Manage Users</div>
        <table class="table">
          <thead class="thead">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Address</th>
              <th>Gender</th>
              <th>
                <a href="../Admin/adminlogin/usersignup.html" class="btnadd">Add User</a>
              </th> 
            </tr>
          </thead>
          <tbody class="tbody">
            <?php
              while ($result= mysqli_fetch_assoc($data))
              {
            ?>
            <tr class="active-row">
              <td> <?php echo $result['id'];?> </td>
              <td> <?php echo $result['name'];?> </td>
              <td><?php echo $result['username'];?> </td>
              <td><?php echo $result['email'];?> </td>
              <td><?php echo $result['address'];?> </td>
              <td><?php echo $result['gender'];?> </td>
              <td><?php echo $result['password'];?> </td>
              <td class="edit">
                 <a href="/SalonBookingTesting/pages/Admin/adminlogin/EditUser.php?id=<?php echo $result['id'];?>& fn=<?php echo $result['name']?>&un=<?php echo $result['username'];?>& em=<?php echo $result['email'];?>& ad=<?php echo $result['address'];?>&gn=<?php echo $result['gender'];?>& ps= <?php echo $result['password'];?>" class="btnedit">Edit</a>
              </td> 
              <td>
               <a href="/SalonBookingTesting/pages/Admin/adminlogin/DeleteUser.php?id=<?php echo $result['id'];?>" class="btndelete">Delete</a>
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
