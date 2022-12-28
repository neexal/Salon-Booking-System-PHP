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
  $query="Select * from abooking";
  $data= mysqli_query($conn,$query);

?>

<!DOCTYPE>
<html>
<head>
<title>Online Booking</title>
<meta charset="utf-8">
<!-- Font Awesome -->
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
      <li class="active"><a href="..\Admin\ManageBooking.php">Manage Appointment</a></li>
      <li><a href="..\Admin\ManageUser.php">Manage User</a></li>
      <li><a href="..\Admin\staffs.php">Manage Staffs</a></li>
      <li id="activestatus" style="position: relative; left: 120px;"><i class="fa fa-user" aria-hidden="true"style="font-size:22px;color:green; position: relative; left: -10px;"></i><?php echo $_SESSION['user']?></li>
      <li><a href="../Admin/adminlogin/userlogout.php" style="position: relative; bottom: 70px; left: 41em;">Log out</a></li>
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
        <div class="regform">Manage Appointment</div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
        <table class="table" id="myTable">
         
          </div>
            
          <thead class="thead">
            <tr>
              <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Gender</th>
              <th>Contact</th>
              <th>Date</th>
              <th>Time</th>
              <th>Services</th>
              <th>Staffs</th>
              <th>Price</th>
              <th>Allocated Time</th>
            </tr>
          </thead>
          <tbody class="tbody">
            <?php
              while ($result= mysqli_fetch_assoc($data))
              {
            ?>
            <tr class="active-row">
              <td> <?php echo $result['id'];?> </td>
              <td> <?php echo $result['first_name'];?> </td>
              <td><?php echo $result['last_name'];?> </td>
              <td><?php echo $result['email'];?> </td>
              <td><?php echo $result['address'];?> </td>
              <td><?php echo $result['gender'];?> </td>
              <td><?php echo $result['contact'];?> </td>
              <td><?php echo $result['date'];?> </td>
              <td><?php echo $result['time'];?> </td>
              <td><?php echo $result['services'];?> </td>
              <td><?php echo $result['staffs'];?> </td>
              <td><?php echo $result['price'];?> </td>
              <td><?php echo $result['timet'];?> </td>
              <td class="edit">
                 <a href="..\Admin\EditBook\index.php?id=<?php echo $result['id'];?>& fn=<?php echo $result['first_name']?>&ln=<?php echo $result['last_name'];?>& em=<?php echo $result['email'];?>& ad=<?php echo $result['address'];?>&gn=<?php echo $result['gender'];?>& cn= <?php echo $result['contact'];?> & dt=<?php echo $result['date'];?>&tm=<?php echo $result['time'];?> & sc= <?php echo $result['services'];?>  & st= <?php echo $result['staffs'];?> & pp= <?php echo $result['price'];?>& tt= <?php echo $result['timet'];?>  " class="btnedit">Edit</a>
              </td> 
              <td>
               <a href="..\Admin\EditBook\delete.php?id=<?php echo $result['id'];?>" class="btndelete">Cancel</a>
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
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {

    td = tr[i].getElementsByTagName("td")[2];
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
