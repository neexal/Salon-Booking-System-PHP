<?php
  include ("db.php");
  $query="Select * from staffsdetails";
  $data= mysqli_query($conn,$query);
?>
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
  $userdata= mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($userdata);
        
?>


<!DOCTYPE>
<html>
<head>
<title>Online Booking</title>
<meta charset="utf-8">
<link href="css/layout/styles/staffs.css" rel="stylesheet" type="text/css" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bellefair&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Questrial&family=Zilla+Slab:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <nav id="mainav"> 
    <!-- ################################################################################################ -->
    <ul id="nav" class="clear">
      <li><a href="../Users/index.php">Home</a></li>
      <li><a href="BookOnline\index.php">Book Online</a></li>
      <li><a href="UsersBooking.php">My Bookings</a></li>
      <li class="active"><a href="staffs.php">Staffs</a></li>
       <li><a href="Profile.php">Change Password</a></li>
      <li id="activestatus" style="position: relative; left: 200px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i>Welcome <?php echo $row['name']?></li>
      <li><a href="../Users/userlogin/logout.php" style="position: relative; left: 200px;">Log out</a></li> 
    </ul>
    <!-- ################################################################################################ --> 
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1 bgded" style="background-image:url('images/8.jpg')">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div>
      <h1>Our Members</a></h1>
      <p class="header-para">There is nothing more rare, nor more beautiful, than a woman being unapologetically herself; comfortable in her perfect imperfection, that is the true essence of beauty.</p>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main id="container" class="clear"> 
      <!-- small-container --> 
    <div class="container bg-light about-one">
      <div class="small-container">
        <div class="text-center">
          <div class="background-text-about ">Principles</div>
          <div class="title-black mb-2">OUR PHILOSPHY</div>
          <p>As a brand inspired by people and how they feel inside, we aim to capture your individuality that stems from your backgrounds, experience and cultures. All of you are different and we are here to Identify the unique and individual spark that illuminates the beauty of each and every woman.</p>
        </div>
      </div>  
    </div>
    <!-- container body --> 
    <!-- ################################################################################################ -->
    <div class="clear center btmspace-80">
      <div class="one_third first">
        <div class="boxedicon">
         <img src="images/international-brand.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">National Brand</h2>
        <p class="font-weight-light mb-0 f-15">A brand and a name that has acclaimed recognition over the world. All professionals themself are a celebrity hairstylist and has been the first choice by the renowned people in Nepal. The brand is known for creating fine looks and highly professional services.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
           <img src="images/renowned-professionals.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Renowned Professionals</h2>
        <p class="font-weight-light mb-0 f-15">Our trainers are certified professionals having significant experience and acclaimed personalities, ensuring your learning from nothing but the best.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
          <img src="images/market-exposure.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Market Exposure</h2>
        <p class="font-weight-light mb-0 f-15">The forever dilemma finally comes to an end where it won’t be just academic learning but you will be given opportunities to explore your skills like a professional by working with clients and the real time audience.</p>
      </div>
    </div>

      <!-- ####################################Second Section########################################################### -->

    <hr class="btmspace-80">
    <!-- ################################################################################################ --> 
  </main>
</div>
<div class="bodysm-controller"><h2 class="title-white mb-2 pb-2">Available Staffs</h2></div>
<div class="mid-container">
  <main id="middle-container" class="clear"> 
          <?php
              while ($result= mysqli_fetch_array($data))
              {
            ?>
        <div class="one-third">
          <div class="boxicon">
            <img src="/SalonBookingTesting/pages/Admin/images/<?php echo $result['image'];?>" alt="Profile" style=""class="image-icon">
          </div>
          <h2 class="nospace push15" heading="<?php echo $result['image'];?>"><?php echo $result['name'];?> </h2>
          <h6 class="golden-text"><?php echo $result['email'];?></h6>
          <p class="font-weight-light mb-0 f-15"><?php echo $result['description'];?></p>
        </div>
        <?php
          }     
        ?>
    </div>
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
    <p class="btmspace-30">Connect with us through email, facebook, tiwtter, instagram and other various platfroms.</p>
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