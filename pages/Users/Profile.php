<?php
include ("db.php");
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

<!DOCTYPE html>
<html>
<head>
	<title>Profile Card</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="css/layout/styles/profile.css" rel="stylesheet" type="text/css" media="all">
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
<body class="bg-light">
	<div class="container">
    <form action="profiles.php" action="post">
     	<div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-5 pt-5">
             	<div class="row z-depth-3">
                 	<div class="col-sm-4 bg-info rounded-left">
        		        <div class="card-block text-center text-white">
                		    <i class="fas fa-user-tie fa-7x mt-5"></i>
                    		<h2 class="font-weight-bold mt-4"><?php echo $row['name'];?></h2>
                    		<p>User</p><i class="far fa-edit fa-2x mb-4"></i>
                		</div>
            		</div>
            		<div class="col-sm-8 bg-white rounded-right">
                    	<h3 class="mt-3 text-center"><?php echo $row['name']?>'s Profile</h3>
                    	<hr class="bg-primary mt-0 w-25">
                   		<div class="row">
                        	<div class="col-sm-6">
                            	<p class="font-weight-bold">Email:</p>
                           		<h6 class=" text-muted"><?php echo $row['email'];?> </h6>
                        	</div>
                            <div class="col-sm-6">
                              <p class="font-weight-bold">Username:</p>
                              <h6 class=" text-muted"><?php echo $row['username'];?> </h6>
                          </div>
                    	</div>

                    		<hr class="bg-primary">
                   		<div class="row">
                          <div class="col-sm-6">
                            <input type="hidden" id="form2Example1" class="form-control" name="id" value="<?php echo $row['id']?>" >
                              <p class="font-weight-bold">Old Password:</p>
                              <h6 class=" text-muted"><?php echo $row['password'];?> </h6>
                          </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Change Password</p>
                                <input type="password" name="cpassword" placeholder="Enter new password" class="text-muted" /> 
                          </div>
                            <input type="submit" value="Save" name="submit" class="subbtn">
                    	</div>
                    </form>
                	   	<hr class="bg-primary">
              		</div>
             	</div>
            </div>
        </div>
	</div>
</body>
</html>

