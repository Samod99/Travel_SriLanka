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

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Kangaroo Cabs</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Kangaroo Cabs <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

          
                <li class="nav-item"><a class="nav-link" href="fleet.php">Offers</a></li>

              

                <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost/1st%20year%20final%20project/">Travel</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Find your car today!</h4>
            <h2>LConvenient, Affordable, Comfortable & Safe</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Connecting You Affordably to Where You Want to Be</h4>
            <h2>
              Wherever You Go, Go Big</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Connecting You Affordably to Where You Want to Be</h4>
            <h2>Astest and Reliable Service</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Tour Packages</h2>
              <a href="feet.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="offers.html"><img src="assets/images/kandy.jpg" alt=""></a>
              <div class="down-content">
                <a href="offers.html"><h4>Kandy</h4></a>
                <h6><small>from</small> $120 <small>per weekend</small></h6>
                <p>Kandy, the last capital of the Sinhala kings, today the most beautiful city in the island</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="offers.html"><img src="assets/images/nuwara.jpg" alt=""></a>
              <div class="down-content">
                <a href="offers.html"><h4>Nuwara Eliya </h4></a>
                <h6><small>from</small> $150 <small>per weekend</small></h6>
                <p>Nuwara Eliya is a city in the hill country of the Central Province, Sri Lanka. Its name means "city on the plain"..</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="feet.php"><img src="assets/images/galle.jpg" alt=""></a>
              <div class="down-content">
                <a href="offers.html"><h4>Galle</h4></a>
                <h6><small>from</small> $150 <small>per weekend</small></h6>
                <p>Drive along the beautiful coastline down south to Galle....</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>“To accept the challenges posed by the modern day traveling hassles and to see ourselves as the top destination for and any kind of travel needs of all class of people by offering them effortless journey at affordable rates and making them our life-long customers in the process ”.</p>
              <ul class="featured-list">
                <li><a href="#">Luxury Cars</a></li>
                <li><a href="#">Luxury Vans</a></li>
                <li><a href="#">Luxury Buses</a></li>
              
              </ul>
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    
            

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Chamith</h4>
                  <p class="n-m"><em>"Good service"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Shashika</h4>
                  <p class="n-m"><em>"Good service."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Navod</h4>
                  <p class="n-m"><em>"Good service"</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Chamod</h4>
                  <p class="n-m"><em>"Good service."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Hansi</h4>
                  <p class="n-m"><em>"Good service."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>liduli</h4>
                  <p class="n-m"><em>"Good service."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Only admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="login.php" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                          <input type="text" class="form-control" placeholder="Enter email" name="email">
                          </fieldset>
                       </div><br>

                       <div class="col-md-6">
                          <fieldset>
                          <input type="text" class="form-control" placeholder="Enter passwod" name="password">
                          </fieldset>
                       </div>
                  </div>

                 
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
           
           <button class="btn btn-primary" name="submit">Login IN</button>
           
           <a href="register.php" class="">sign in</a>
          </div>
        </div>
      </div>
    </div>

  

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Kangaroo Cabs 2020 © All Rights Reserved Terms of use</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>