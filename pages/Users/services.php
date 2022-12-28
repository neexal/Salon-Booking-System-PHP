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
<link href="css/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <nav id="mainav"> 
    <!-- ################################################################################################ -->
    <ul id="nav" class="clear">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="BookOnline/index.php">Book Online</a></li>
      <li><a href="UsersBooking.php">My Bookings</a></li>
      <li><a href="staffs.php">Staffs</a></li>
       <li><a href="Profile.php">Change Password</a></li>
      <li id="activestatus" style="position: relative; left: 200px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i>Welcome <?php echo $row['name']?></li>
      <li><a href="../userlogin/userlogout.php" style="position: relative; left: 200px;">Log out</a></li> 
    </ul>
    <!-- ################################################################################################ --> 
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1 bgded" style="background-image:url('images/10.jpg')">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div>
      <h1>Services</a></h1>
      <p class="header-para">Time for a new style or simply wanting to feel revived? We offer a full range of services from cuts to color, to personalized treatments. Our team of expert and talented stylists will make you look and feel your best.</p>
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
        <div class="boxedicon">
         <img src="images/haircut _treatment.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Haircut & Treatment</h2>
        <h6 class="golden-text">We pledge to care for your hair!</h6>
        <p class="font-weight-light mb-0 f-15">Time for a new style or simply wanting to feel revived? We offer a full range of services from cuts to color, to personalized treatments. Our team of expert and talented stylists will make you look and feel your best.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
           <img src="images/mens_grooming.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Hair Colour</h2>
         <h6 class="golden-text">Unleash your hair!</h6>
        <p class="font-weight-light mb-0 f-15">Set free your desire to stand out in a crowd. Enjoy the luxury afforded by our exceptional spectrum of colors, from rich reds to abundant browns to brilliant blondes. Are you ready for unbelievably vibrant hair color?</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
          <img src="images/beauty_treatments.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Beauty treatments</h2>
        <h6 class="golden-text">Brings out your natural shine</h6>
        <p class="font-weight-light mb-0 f-15">Great skincare is the foundation to every beauty routine. Glowing skin is always in.</p>
      </div>

      <!-- ####################################Second Section########################################################### -->

      <div class="one_third first">
        <div class="boxedicon">
          <img src="images/manicure_padicure.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Manicure & Pedicure </h2>
        <h6 class="golden-text">Nothing improves your mood like a fresh manicure!!</h6>
        <p class="font-weight-light mb-0 f-15">Make time for yourself today- to relax, reflect and get that fresh Manicure & Pedicure.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
          <img src="images/modern_nail_art.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">MODERN NAIL ART</h2>
         <h6 class="golden-text">Nail art is choosing to be different. Just Nail it!!</h6>
        <p class="font-weight-light mb-0 f-15">A Nail bar that is suitable for all your moods and occasions. Life is too short to have plain nails so get creative and have some fun.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
          <img src="images/makeup_grooming.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">PROFESSIONAL MAKEUP</h2>
        <h6 class="golden-text">Confidence level: selfie with no filter</h6>
        <p class="font-weight-light mb-0 f-15">A Perfect occasion calls for a perfect look and what makeup really does, is a known fact. Let’s get you ready and give people a reason to stare.</p>
      </div>
    </div>
    <div class="lower-section">
    </div>
    <hr class="btmspace-80">
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