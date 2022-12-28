<?php

  session_start();
  if (!isset($_SESSION['login']) ||$_SESSION ['login']!=true){
  header('location: \signin.html');
  exit;
}
?>

<?php
function create_time_range($start, $end, $interval = '30 mins', $format = '12') {
    $startTime = strtotime($start); 
    $endTime   = strtotime($end);
    $returnTimeFormat = ($format == '12')?'g:i:s A':'G:i:s';

    $current   = time(); 
    $addTime   = strtotime('+'.$interval, $current); 
    $diff      = $addTime - $current;

    $times = array(); 
    while ($startTime < $endTime) { 
        $times[] = date($returnTimeFormat, $startTime); 
        $startTime += $diff; 
    } 
    $times[] = date($returnTimeFormat, $startTime); 
    return $times; 
}
// create array of time ranges 
$times = create_time_range('7:30', '20:30', '30 mins');

?>
<!-- For getting data of staffs -->
<?php
  include 'db.php';
    $query="Select * from staffsdetails";
  $data= mysqli_query($conn,$query);
?>
<!-- For getting data of service -->
<?php 
    include 'db.php';
    $sql="Select * from service";
  $servicedata= mysqli_query($conn,$sql);
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
<link href="layout/styles/booked.css" rel="stylesheet" type="text/css" media="all">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body id="top">
<!-- ################################################################################################ -->
  <div class="wrapper row0">
    <nav id="mainav"> 
      <!-- ################################################################################################ -->
      <ul id="nav" class="clear">
        <li class=""><a href="..\index.php">Home</a></li>
        <li class="active"><a href="..\BookOnline\index.php">Book Online</a></li>
        <li><a href="..\UsersBooking.php">My Bookings</a></li>
        <li><a href="..\staffs.php">Staffs</a></li>
         <li><a href="..\Profile.php">Change Password</a></li>
          <li id="activestatus" style="position: relative; left: 200px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i>Welcome <?php echo $row['name']?></li>
      <li><a href="../userlogin/logout.php" style="position: relative; left: 200px;">Log out</a></li> 
      </ul>
      <!-- ################################################################################################ --> 
    </nav>

  </div>
  <!-- ################################################################################################ -->
  <div class="wrapper row1 bgded" style="background-image:url('images/demo/backgrounds/9.jpg')">
    <header id="header" class="clear"> 
      <div class="alert alert-success" role="alert">
           <p class="header-para">Your Appointment has been scheduled successfully.</p>
      </div>
      <!-- ################################################################################################ -->
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
            <div class="boxedicon"><a class="circle" href="#"><i class="fa fa-gift fa-2x"></i></a></div>
            <h2 class="nospace push15">Services</h2>
            <p class="para" >We believe style and beauty serve to enhance your unique journey. Our goal is to offer an engaging space where you can refine and redefine how you look and feel.</p>
          </div>
          <div class="one_third">
            <div class="boxedicon"><a class="circle" href="#"><i class="fa fa-history fa-2x"></i></a></div>
            <h2 class="nospace push15">Book appointment</h2>
             <p class="para" >Use Unisex Salon online booking system to choose your time and Book. It's quick and easy to do, Book your appointment today.</p>
          </div>
        </div>
        <hr class="btmspace-80">
        <section>
          <h2 class="font_xxl center btmspace-50">LET US SHINE YOU WITH SPECIAL OFFERS AND DEALS!</h2>
          <ul class="nospace clear">
          <li class="one_third first">
            <h6 class="hea"><i class="fa fa-book"></i>About us</h6>
              <p class="para">As a guest of ours, we want you to feel special and a part of something special With over 20 years of experience, Unisex salon is an international style innovator, creating cutting edge hair designs for celebrities and influencers worldwide.</p>
         </li>
            <li class="one_third">
              <h6 class="hea"><i class="fa fa-flag"></i> Need Assistance ?</h6>
              <p class="para">Chhaya Center, Thamel +97715252055
               SiddharthaComplex, Koteshwor +9770528443
               Miniso Building, Kupondole +97702555860</p>
            </li>
            <li class="one_third">
              <h6 class="hea"><i class="fa fa-group"></i>Products we use</h6>
              <p class="para">Most of the products we use at salon exclusively imported from USA, Korea, India, China, and other countries, while we use hand-picked high quality Nepalese products as well. Furthermore, we assure you of professional, personalized and high quality service at all times.</p>
          </li></p>
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
      <form class="form-container" action="book.php" method="post">
        <div class="container">
          <div class="container-time">
            <h2 class="heading">Time Open</h2>
            <h3 class="heading-days">Monday-Friday</h3>
            <p>7am - 9pm </p>

            <h3 class="heading-days">Saturday and sunday</h3>
            <p>No any service available.</p>

            <hr>

            <h4 class="heading-phone">Call Us: +97702555860</h4>
          </div>

          <div class="container-form">
            <form action="..BookOnline/book.php" method="post">
            <h2 class="heading heading-yellow">Reservation Online</h2>

          <div class="form-field">
            <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" name="first_name" required />
                <label class="form-label" for="form2Example1">First Name</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example2" class="form-control" name="last_name" required />
                <label class="form-label" for="form2Example2">Last Name</label>
              </div>
            </div>

            <div class="form-field">
            <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="formemail" class="form-control" name="email" required />
                <label class="form-label" for="form2Example1">Email Address</label>
              </div>
            </div>

            <div class="form-field">
            <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" name="address" required />
                <label class="form-label" for="form2Example1">Address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example2" class="form-control" name="gender" required />
                <label class="form-label" for="form2Example2">Gender</label>
              </div>
            </div>
            <div class="form-field">
            <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" name="contact" required />
                <label class="form-label" for="form2Example1">Contact Number</label>
              </div>
            </div>

            <div class="form-field">
            <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="date" id="date" class="form-control" name="date" required />
                <label class="form-label" for="form2Example1">Check in Date</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <select class="custom-time" name="time" id="time">
                  <option>Select Time</option>
                  <?php foreach($times as $key=>$val){ ?>
                  <option name="time" class="custom-option" value="<?php echo $val;?>"><?php echo $val;?></option>
                  <?php } ?>
                </select>
                <label class="form-label" for="form2Example2">Time</label>
              </div>
            </div>
             <div class="form-field">
            <!-- Email input -->
              <div class="form-outline mb-4">
                <select class="form-contro" name="services" id="service">
                     <?php while ($result= mysqli_fetch_array($servicedata)):;?>
                  <!-- Home Ware -->
                  <option name="services" data-price="<?php echo $result[2];?>" time="<?php echo $result[3];?>" service="<?php echo $result[0];?>"><?php echo $result[1];?></option>
                <?php endwhile;?>
               </select>
                <label class="form-label" for="form2Example1">Services</label>
              </div>

              <div class="form-outline mb-4">
          <select disabled="disabled" class="subcat" id="category2" name="staffs">
                   <option value>Available Staffs</option>
                         <?php while ($result= mysqli_fetch_array($data)):;?>
                  <!-- Home Ware -->
                  <option name="staffs" staffs="<?php echo $result[0];?>"><?php echo $result[1];?></option>
                <?php endwhile;?>
                </select>
              </div> 
      </div>
            <div class="form-field">    
              <div class="form-outline mb-4">
               <input type="text" id="price" readonly="readonly" class="form-control" name="price">
                <label class="form-labe" id="prices" name="price" for="form2Example2">Price</label>
            </div>
            <div class="form-outline mb-4">
                <input type="text" id="times" readonly="readonly" class="form-control" name="timet" />
                <label class="form-labe" id="time" name="timet" for="form2Example2">Duration</label>
              </div>
            </div>
          <button class="sbtn">Submit</button>
        </form>
      </div>
    </div>     
    </form>
  </div>
  </div>
  <!-- MDB -->
  <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
  ></script>
  <script type="text/javascript">
    var date= new Date();
    var tdate= date.getDate();
    var month= date.getMonth() + 1;
    if (tdate< 10) {
      tdate ='0'+ tdate;
    }
    if(month<10){
      month= '0' + month;
    }
    var year = date.getUTCFullYear();
    var minDate = year + "-" + month +"-" + tdate;
    document.getElementById("date").setAttribute('min', minDate)
  </script>




    <script type="text/javascript">
      $(function () {
      $('#service').change(function () {
          $('#price').val($('#service option:selected').attr('data-price'));
      });
  });

$(function () {
    $('#service').change(function () {
        $('#times').val($('#service option:selected').attr('time'));
    });
});

  </script>

  <script>
      $(function(){
      
      var $cat = $("#service"),
          $subcat = $(".subcat");
      
      var optgroups = {};
      
      $subcat.each(function(i,v){
        var $e = $(v);
        var _id = $e.attr("id");
        optgroups[_id] = {};
        $e.find("optgroup").each(function(){
          var _r = $(this).data("rel");
          $(this).find("option").addClass("is-dyn");
          optgroups[_id][_r] = $(this).html();
        });
      });
      $subcat.find("optgroup").remove();
      
      var _lastRel;
      $cat.on("change",function(){
          var _rel = $(this).val();
          if(_lastRel === _rel) return true;
          _lastRel = _rel;
          $subcat.find("option").attr("style","");
          $subcat.val("");
          $subcat.find(".is-dyn").remove();
          if(!_rel) return $subcat.prop("disabled",true);
          $subcat.each(function(){
            var $el = $(this);
            var _id = $el.attr("id");
            $el.append(optgroups[_id][_rel]);
          });
          $subcat.prop("disabled",false);
      });
      
  });
    </script>
  </body>
  </html>