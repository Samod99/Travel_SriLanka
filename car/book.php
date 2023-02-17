
  
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
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>book now </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">



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
                <li class="nav-item">
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

   

  
      <footer>

    <!-- Modal -->
    <div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30">Book Your CAR</h3>
						<form action="insert1.php" method="post">
						      
                        <input type="text" class="form-control mb-2" placeholder="Pick-up location" name="plocation">
                        <input type="text" class="form-control mb-2" placeholder="Return location" name="rlocation">
                        <input type="text" class="form-control mb-2" placeholder="Pick-up date/time.mm/dd/yyyy-hh:hh" name="pdate">
                        <input type="text" class="form-control mb-2" placeholder="Return date/time.mm/dd/yyyy-hh:hh" name="rdate">
                        <input type="text" class="form-control mb-2" placeholder="Fisrt Name" name="name" value="<?php echo $UName ?>">
                              
                              <input type="email" class="form-control mb-2" placeholder="Email" name="email" value="<?php echo $Email ?>">
                             
                              <input type="text" class="form-control mb-2" placeholder="User Telephone No" name="tno" value="<?php echo $Tno ?>">
                            

                             
     
    
							
							

                            <button class="btn btn-primary" name="submit">Book Now</button>
						</form>
					</div>
					
							
							
							
					
				</div>
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
