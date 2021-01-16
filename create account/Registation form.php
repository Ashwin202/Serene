<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";    
  }
  else
  {

      $sql="insert into create_account(name,email,password,mobile,address,gender,country,pictrure) values('$fname','$email','$Passw','$mobi','$addr','$gend','$countr','$pict')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
   header('location:http://localhost/home.html'); 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SERENE</title>
  <link href="hotel-white.png" rel="icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<a href="index.html" class="logo" style="margin-top:20px;"><img src="SENERE.png" alt="" class="img-fluid"></a>
<body style="background-color:#5c5b5a;">
  
<div class="container-fluid"style="background-color:#5c5b5a;"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <center><h1 ><b><color="#ffffff">Create New Account?</b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4 style="color: #ffffff;">Username :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5" ><h4 style="color: #ffffff;">Email-Id:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="color: #ffffff;">Password :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="color: #ffffff;">Mobile No:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="color: #ffffff;">Address :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control"required></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top" style="color: #ffffff;">Gender :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"required ><b style="color: #ffffff;">Male</b>&emsp;
              <input type="radio" name="gend"value="male"required ><b style="color: #ffffff;">Female</b>&emsp;
              <input type="radio" name="gend"value="male"required ><b style="color: #ffffff;">Other</b>
          </div>
          </div>
          <div class="form-group">
            <div class="control-label col-sm-5"><h4 style="color: #ffffff;">Country :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
              <option >India</option>
              <option>Middle East</option>
              <option>Russia</option>
			   <option>China</option>
			    <option>Pakisthan</option>
				 <option>Iran</option>
				  <option>USA</option>
            </select>
        </div>
        </div>
        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top"></h4></div>          
          <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
             <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>         
          </div>
          </div>
          </div>
        </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
</div>
</body>
</html>
