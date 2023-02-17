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
    <title>room</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    
       <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="main.php">Home</a></li>
                                        <li><a class="active" href="room.php">Rooms</a></li>
                                        <li><a  href="about.php">About</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="http://localhost/1st%20year%20final%20project/">Travel</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                
                                    <img src="logo1.png">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        <h3>Luxaries Rooms</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- offers_area_start -->
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Our Offers</span>
                        <h3>Ongoing Offers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/1.png" alt="">
                        </div>
                        <h3>Up to 35% savings on Club <br> 
                                rooms and Suites</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>3 Adults & 2 Children size</li>
                            <li>Sea view side</li>
                        </ul>
                        <a href="insert.php" class="book_now">book now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/2.png" alt="">
                        </div>
                        <h3>Up to 35% savings on Club <br> 
                                rooms and Suites</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>3 Adults & 2 Children size</li>
                            <li>Sea view side</li>
                        </ul>
                        <a href="insert.php" class="book_now">book now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/3.png" alt="">
                        </div>
                        <h3>Up to 35% savings on Club <br> 
                                rooms and Suites</h3>
                        <ul>
                            <li>Luxaries condition</li>
                            <li>3 Adults & 2 Children size</li>
                            <li>Sea view side</li>
                        </ul>
                        <a href="insert.php" class="book_now">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Featured Rooms</span>
                        <h3>Choose a Better Room</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Superior Room</h3>
                        </div>
                        <a href="insert.php" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Deluxe Room</h3>
                        </div>
                        <a href="insert.php" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/3.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Signature Room</h3>
                        </div>
                        <a href="insert.php" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/4.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Couple Room</h3>
                        </div>
                        <a href="insert.php" class="line-button">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->

  

    
    
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