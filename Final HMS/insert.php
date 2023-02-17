<?php
    
    require_once("connection2.php");
	session_start();
	$UName=$_SESSION['uname'];
    
    $query = "select * from records where uname = '".$UName."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        
		$ID = $row['id'];
            $UName = $row['uname'];
			
            $Email = $row['email'];
			$Tno = $row['tno'];
           
           
			
			
           
           
        
    }
	
	?>	
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>book now </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/gijgo.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>

<body>
	
   
	

	<!-- Start Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30">Book Your Room</h3>
						<form action="update.php" method="post">
						      
						
                              <input type="text" class="form-control mb-2" placeholder="Fisrt Name" name="name" value="<?php echo $UName ?>">
                              
                              <input type="email" class="form-control mb-2" placeholder="Email" name="email" value="<?php echo $Email ?>">
                             
                              <input type="text" class="form-control mb-2" placeholder="User Telephone No" name="tno" value="<?php echo $Tno ?>">
                             <input type="date" class="form-control mb-2" placeholder="Booking Date" name="date">

                             <div class="input-group-icon mt-10">
								<div class="icon"><i class="" aria-hidden="true"></i></div>
								<div class="form-select">
											<select name="type" class="form-control mb-2">
												<option>--Room type--</option>
									<option value="superior">Superior Room</option>
									<option value="deluxe">Deluxe Room</option>
									<option value="signature">Signature Room</option>
									<option value="couple">Couple Room</option>
									</select>
								</div>
							</div>
     
    
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="" aria-hidden="true"></i></div>
								<div class="form-select">
											<select name ="city" class="form-control mb-2" >
												<option>--City--</option>
									<option value="colombo">Colombo</option>
									<option value="galle">Galle</option>
									<option value="dille">Dille</option>
									<option value="newyork">Newyork</option>
									<option value="islamabad">Islamabad</option>
									</select>
								</div>
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="" aria-hidden="true"></i></div>
								<div class="form-select" >
											<select name="country" class="form-control mb-2" >
												<option>--Country--</option>
									<option value="bangladesh">Bangladesh</option>
									<option value="india">India</option>
									<option value="england">England</option>
									<option value="srilanka">Srilanka</option>
									</select>
								</div>
							</div>

                            <button class="btn btn-primary" name="submit">Book Now</button>
						</form>
					</div>
					
							
							
							
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Area -->

   
      <!-- footer -->
      <footer class="footer" >
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                address
                            </h3>
                            <p class="footer_text" >  No.8/B,Main street,Hambantota. <br>
                                    Sri Lanka</p>
                          
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Reservation
                            </h3>
                            <p><a href="#">+94 071 5866 800</a> <br>
                            <a href="#">+94 071 5866 800</a> 
                        </p><br>
                            cinnamongrand@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Navigation
                            </h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    FOLLOW US
                            </h3>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instragram</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <!-- footer_end -->
 

	<!-- JS here -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/ajax-form.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/scrollIt.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/nice-select.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/gijgo.min.js"></script>

	<!--contact js-->
	<script src="js/contact.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/mail-script.js"></script>

	<script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>



</body>
</html>