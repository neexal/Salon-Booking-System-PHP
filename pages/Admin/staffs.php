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
  include ("db.php");
  $query="Select * from staffsdetails";
  $data= mysqli_query($conn,$query);

?>

<!DOCTYPE>
<html>
<head>
<title>Online Booking</title>
<meta charset="utf-8">
<link href="../Admin/css/layout/styles/staffs.css" rel="stylesheet" type="text/css" media="all">
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
      <li><a href="..\Admin\index.php">Home</a></li>
      <!-- <li><a href="..\Admin\BookOnline\Bookonline.php">Book Online</a></li> -->
      <li><a href="..\Admin\ManageBooking.php">Manage Appointment</a></li>
      <li><a href="..\Admin\ManageUser.php">Manage User</a></li>
      <li class="active"><a href="..\Admin\staffs.php">Manage Staffs</a></li>
      <li id="activestatus" style="position: relative; left: 120px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i><?php echo $_SESSION['user']?></li>
      <li><a href="../Admin/adminlogin/userlogout.php" style="position: relative; bottom: 70px; left: 41em;">Log out</a></li>
    </ul>
    <!-- ################################################################################################ --> 
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row1 bgded" style="background-image:url('../Admin/images/8.jpg')">
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
         <img src="../Admin/images/international-brand.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">National Brand</h2>
        <p class="font-weight-light mb-0 f-15">A brand and a name that has acclaimed recognition over the world. All professionals themself are a celebrity hairstylist and has been the first choice by the renowned people in Nepal. The brand is known for creating fine looks and highly professional services.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
           <img src="../Admin/images/renowned-professionals.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Renowned Professionals</h2>
        <p class="font-weight-light mb-0 f-15">Our trainers are certified professionals having significant experience and acclaimed personalities, ensuring your learning from nothing but the best.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon">
          <img src="../Admin/images/market-exposure.png" class="benefit-icon">
        </div>
        <h2 class="nospace push15">Market Exposure</h2>
        <p class="font-weight-light mb-0 f-15">The forever dilemma finally comes to an end where it won’t be just academic learning but you will be given opportunities to explore your skills like a professional by working with clients and the real time audience.</p>
      </div>
    </div>

      <!-- ####################################Second Section########################################################### -->

    <hr class="btmspace-80">
    <!-- ################################################################################################ --> 
    </div>
  </main>
</div>
      <div class="bodysm-controller">
        <div class="title-white mb-2 pb-2">Manage Staffs</div>
      </div>
      <div class="regform"></div>
    <div class="bodys-container">

       <div class="body-table">
        <table class="table">
          <thead class="thead">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Gender</th>
              <th>Phone Number</th>
              <th>Description</th>
              <th>Profile</th>
              <th>
                <a href="../Admin/AddStaffs.html" class="btnadd">Add Staffs</a>
              </th> 
            </tr>
          </thead>
          <tbody class="tbody">
            <?php
              while ($result= mysqli_fetch_array($data))
              {
            ?>
            <tr class="active-row">
              <td> <?php echo $result['id'];?> </td>
              <td> <?php echo $result['name'];?> </td>
              <td><?php echo $result['email'];?> </td>
              <td><?php echo $result['address'];?> </td>
              <td><?php echo $result['gender'];?> </td>
              <td><?php echo $result['contact'];?> </td>
              <td><?php echo $result['description'];?> </td>
              <td><img src="../Admin/images/<?php echo $result['image'];?>" alt="Profile" style="width:100px;height: 100px;"></td>
              <td>
                <a href="..\Admin\EditStaffs\EditStaffs.php?id=<?php echo $result['id'];?>& fn=<?php echo $result['name']?> & em=<?php echo $result['email'];?>& ad=<?php echo $result['address'];?>&gn=<?php echo $result['gender'];?>& cn= <?php echo $result['contact'];?> & dc=<?php echo $result['description'];?> & im=<?php echo $result['image'];?>"class="btnedit">Edit</a>
              </td>

              <td>
               <a href="..\Admin\EditStaffs\DeleteStaffs.php?id=<?php echo $result['id'];?>" class="btndelete">Remove</a>
              </td> 
            </tr>
         <?php 
           }
          ?>
          </tbody>
          
        </table>
      </div>
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