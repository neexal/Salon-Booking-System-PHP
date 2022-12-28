<?php
/*
This is a code for Edit
*/

  include ("db.php");
  error_reporting(0);
  $id= $_GET['id'];
  $fn= $_GET['fn'];
  $em= $_GET['em'];
  $ad= $_GET['ad'];
  $gn= $_GET['gn'];
  $cn= $_GET['cn'];
  $dc= $_GET['dc'];
  $im= $_GET['im'];
?>

<?php

if($_GET['submit'])
{
  $id=$_GET['id'];
  $name= $_GET['name'];
  $email= $_GET['email'];
  $address= $_GET['address'];
  $gender= $_GET['gender'];
  $contact= $_GET['contact'];
  $description= $_GET['description'];
  $image=$_GET['image'];


  if (empty($image)) {
      echo "alert('Please select an image');
    </script>";
    # code...
  }

  $sql= "UPDATE staffsdetails set name='$name', email='$email', address='$address', gender='$gender', contact='$contact', description='$description', image='$image' WHERE id='$id' ";

  $result=mysqli_query($conn, $sql);

if ($result) {
    echo "<script> alert('Record Updated Successfully')
      window.location.href='../staffs.php';
    </script>";
}else{
 echo "<script> alert('Error Updating')</script>";
  
}
}
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css/Addstaffs.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Staffs Registration</div>
    <div class="content">
      <form action="">
        <div class="user-details">
          <div class="input-box">
            <input type="hidden" id="form2Example1" class="form-control" name="id" value="<?php echo $id?>" >
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="name" value="<?php echo $fn?>">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email" value="<?php echo $em?>">
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" required name="address" value="<?php echo $ad?>">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" minlength="4" maxlength="10" required name="contact" value="<?php echo $cn?>">
          </div>
          <div class="">
            <span class="details">Description</span>
            <input type="text" class="textarea" name="description" value="<?php echo $dc ?>">
          </div>
        </div>
        <div>
          <div class="input-box">
            <span class="details">Upload Image</span>
            <input type="file" class="file" accept="Image/*" name="image" name="image" value="<?php echo $im;?>"><img src="../images/<?php echo $im;?>" alt="Profile" style="width:100px;height: 100px;>
          </div>
        </div>
        <div class="input-box">
          <span class="gender-details">Gender</span>
          <input type="radio" name="gender" value="Male" id="male" required 
          <?php
            if($gn=="Male")
            {
              echo "checked";
            }
          ?>
          ><span class="gender" id="male">Male</span>
          <input type="radio" name="gender" value="Female" id="female" required
             <?php
            if($gn=="Female")
            {
              echo "checked";
            }
          ?>

          ><span class="gender" id="female">Female</span>
          <input type="radio" name="gender" value="Others" id="others" required><span class="gender" id="others"
             <?php
            if($gn=="Others")
            {
              echo "checked";
            }
          ?>

          >Others</span>
        </div>
        <div class="button">
          <input type="submit" value="Update" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
