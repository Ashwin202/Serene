<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="hotel-white.png" rel="icon">
        <title>SERENE</title>
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

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <a href="http://localhost/home.html" class="logo"><img src="SENERE.png" alt="" class="img-fluid"></a>
    <body style="background-color:#5c5b5a;">
        <!--================Header Area =================-->
      
        <!--================Header Area Finish=================-->
        <br><br><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><center>
                <form action="" method="post">
                <a class="btn btn-primary" href="rooms.php">Book Room</a>
                    <a class="btn btn-success" href="admin_dashboard.php">View Users Detail</a>
                    <a class="btn btn-warning" href="feedback.php">Feedback Details</a>                  
                    <a class="btn btn-danger" href="http://localhost/">Logout</a>
                </form></center>
            </div>
            <div class="col-md-2"></div>
        </div>
        <br><br><br>
        <!--================Banner Area END =================-->
     
       		<center><h3 style="color: #fff;">Feedback</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>                            
                            <th style="color: #fff;"> Name</th>
                            <th style="color: #fff;">Mobile Number</th>
                            <th style="color: #fff;">Email ID</th>
                            <th style="color: #fff;">Message</th>
                            
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"contactform");
                    $query = "select * from contactdata;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <
                                <td style="color: #fff;"><?php echo $row['firstname'];?></td>
                                <td style="color: #fff;"><?php echo $row['phone'];?></td>
                                <td style="color: #fff;"><?php echo $row['email'];?></td>
                                <td style="color: #fff;"><?php echo $row['message'];?></td>
                                
                            </tr>
                        <?php
                    }
                ?>
            </table>
            </div>
        </div>
         <br><br><br><br><br><br>
        <!--================ start footer Area  =================-->	
        <
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