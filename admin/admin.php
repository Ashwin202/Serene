<?php
    session_start();
    if(isset($_POST['admin_login'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"royal_hotel");
        $query = "select * from admin where email = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['email'] == $_POST['email']){
                if($row['password'] == $_POST['password']){
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("Location:http://localhost/admin/admin_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
                
            }
            else{
                echo "<script>alert('Wrong Password...');</script>";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="hotel-white.png" rel="icon">
        <title>SERENE-Admin</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="styles.css">
       
        
		
    <!-- Template Main CSS File -->
  <link href="assets/css/stylex.css" rel="stylesheet">




   
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">



    </head>
    <a href="http://localhost/home.html" class="logo"><img src="SENERE.png" alt="" class="img-fluid"></a>
    <body style="background-color: #5c5b5a;">
        <!--================Header Area =================-->
       
        <!--================Header Area Finish=================-->
    
        <br><br><br><br><br>
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><h3 style="color: #fff;">Admin Login</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<form action="" method="post">
			<div class="form-group">
		    	<label for="name" style="color: #fff;">Email:</label>
		    	<input type="text" class="form-control" name="email" required="">
		  	</div>
			<div class="form-group">
		    	<label for="email" style="color: #fff;">Password:</label>
		    	<input type="password" class="form-control" name="password" required="">
		  	</div>
		  	
				<button type="submit" class="btn btn-warning" name="admin_login">Login</button>
		</form>
        
        	</div>
        	<div class="col-md-2"></div>
        </div>
        <br><br><br><br><br><br>
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h1 class="footer_title" style="font-size: 50px;">SERENE <img src="hotel-white.png" style="height: 50px;" style="width: 40px;"> </h1>
                            <h3 style="color: #fff";>Our Address</h3>
                <p style="color: #fff";>Opposite Kesiya Towers, Kowdiar Road, Thiruvananthapuram.</p>
                <h3 style="color: #fff">Email Us</h3>
                <p style="color: #fff";>info@serenehotelsindia.com<br>contact@serenehotelsindia.com</p><br><p style="color: #fff";>0471 255 2458</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <br><br>
                            <h6 class="footer_title" style="font-size: 25px;">Useful Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#" style="color: #fff";>Home</a></li>
                                        <li><a href="#" style="color: #fff";>Feature</a></li>
                                        <li><a href="#" style="color: #fff";>Services</a></li>
                                        <li><a href="#" style="color: #fff";>Gallery</a></li>
                                    </ul>
                                </div>
                              										
                            </div>							
                        </div>
                    </div>							
                   
                <div class="border_line"></div>
               
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
