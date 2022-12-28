<?php

  session_start();
  if (!isset($_SESSION['login']) ||$_SESSION ['login']!=true){
  header('location: \signin.html');
  exit;
}
?>
<?php
  include ("db.php");
  $query="Select * from userdetails where username='$_SESSION[user]'";
  $data= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($data);
        
?>

<!DOCTYPE>
<html>
<head>
<title>Online Booking</title>
<meta charset="utf-8">
<link href="css\layout/styles/index.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <nav id="mainav"> 
    <!-- ################################################################################################ -->
    <ul id="nav" class="clear">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="BookOnline\index.php">Book Online</a></li>
      <li><a href="UsersBooking.php">My Bookings</a></li>
      <li><a href="staffs.php">Staffs</a></li>
      <li><a href="Profile.php">Change Password</a></li>
        <li id="activestatus" style="position: relative; left: 200px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i>Welcome <?php echo $row['name']?></li>
      <li><a href="userlogin\logout.php" style="position: relative; left: 200px;">Log out</a></li> 
    </ul>
    <!-- ################################################################################################ --> 
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1 bgded" style="background-image:url('images/demo/backgrounds/2.jpg')">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div>
      <h1><a href="index.html">Unisex Salon</a></h1>
      <p class="header-para">Online Scheduling and Online Booking at its Best. Open the app, choose the service and get a premium salon services booking online. Treat yourself today! and book required services online</p>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main id="container" class="clear"> 
    <!-- container body --> 
    <!-- ################################################################################################ -->
    <div class="clear center btmspace-80">
      <div class="one_third first">
        <div class="boxedicon"><a class="circle" href="#"><i class="fa fa-area-chart fa-2x"></i></a></div>
        <h2 class="nospace push15">Available Products</h2>
        <p class="para">Unisex Salon stylists are equipped with some of the best professional haircare products available. View our selection of brands below and head to your nearest Regis salon to see them in action.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon"><a class="circle" href="services.php"><i class="fa fa-gift fa-2x"></i></a></div>
        <h2 class="nospace push15">Services</h2>
        <p class="para" >We believe style and beauty serve to enhance your unique journey. Our goal is to offer an engaging space where you can refine and redefine how you look and feel.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon"><a class="circle" href="BookOnline\index.php"><i class="fa fa-history fa-2x"></i></a></div>
        <h2 class="nospace push15">Book appointment</h2>
        <p class="para" >Use Unisex Salon online booking system to choose your time and Book. It's quick and easy to do, Book your appointment today.</p>
      </div>
    </div>
    <hr class="btmspace-80">
    <section>
      <h2 class="font_xxl center btmspace-50">LET US SHINE YOU WITH SPECIAL OFFERS AND DEALS!</h2>
      <ul class="nospace clear">
        <li class="one_third first">
          <h6><i class="fa fa-book"></i>About us</h6>
          <p class="para">As a guest of ours, we want you to feel special and a part of something special With over 20 years of experience, Unisex salon is an international style innovator, creating cutting edge hair designs for celebrities and influencers worldwide.</p>
        </li>
        <li class="one_third">
          <h6><i class="fa fa-flag"></i> Need Assistance ?</h6>
          <p class="para">Chhaya Center, Thamel +97715252055
             SiddharthaComplex, Koteshwor +9770528443
             Miniso Building, Kupondole +97702555860
           </p>
        </li>
        <li class="one_third">
          <h6><i class="fa fa-group"></i> Products we use</h6>
          <p class="para" >Most of the products we use at salon exclusively imported from USA, Korea, India, China, and other countries, while we use hand-picked high quality Nepalese products as well. Furthermore, we assure you of professional, personalized and high quality service at all times.</p>
        </li>
      </ul>
    </section>
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