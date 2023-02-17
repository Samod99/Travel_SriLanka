<?php
    
    require_once("connection2.php");
	session_start();
	$UName=$_SESSION['uname'];
    
    $query = "select * from records where uname = '".$UName."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        
	
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

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Special Drop Hire Rates</h4>
              <h2>PLAN YOUR HOLIDAY</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-1-370x270.jpg" alt="">

              <div class="down-content">
                <h4>BUDGET CARS - ALTO/MICRO/KWID</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>If you are a single driver car owner or a supplier with large fleet of cars and thinking to part of a quality & professional organization and its rapidly growing national and international network. Please fill the attached for and our partner expansion team shall be in touch with you right away.</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
               <a href="book1.php">Book now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-2-370x270.jpg" alt="">

              <div class="down-content">
                <h4>MINI CARS LEVEL 1 - WAGAN R/SPACIA</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>If you are a single driver car owner or a supplier with large fleet of cars and thinking to part of a quality & professional organization and its rapidly growing national and international network. Please fill the attached for and our partner expansion team shall be in touch with you right away.</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                <a href="book1.php">Book now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-3-370x270.jpg" alt="">

              <div class="down-content">
                <h4>AC VAN - DOLPHIN/CARAVAN</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>If you are a single driver car owner or a supplier with large fleet of cars and thinking to part of a quality & professional organization and its rapidly growing national and international network. Please fill the attached for and our partner expansion team shall be in touch with you right away.!</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                <a href="book1.php">Book now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-4-370x270.jpg" alt="">

              <div class="down-content">
                <h4>SEDAN CARS - PRIUS/AXIO/GRACE</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>If you are a single driver car owner or a supplier with large fleet of cars and thinking to part of a quality & professional organization and its rapidly growing national and international network. Please fill the attached for and our partner expansion team shall be in touch with you right away.</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                <a href="book1.php">Book now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-5-370x270.jpg" alt="">

              <div class="down-content">
                <h4>MINI CARS LEVEL 2 - AQUA/HONDA FIT</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>If you are a single driver car owner or a supplier with large fleet of cars and thinking to part of a quality & professional organization and its rapidly growing national and international network. Please fill the attached for and our partner expansion team shall be in touch with you right away.</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                <a href="book1.php">Book now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-6-370x270.jpg" alt="">

              <div class="down-content">
                <h4>SUV-VEZEL/CHR/MONTERO</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>If you are a single driver car owner or a supplier with large fleet of cars and thinking to part of a quality & professional organization and its rapidly growing national and international network. Please fill the attached for and our partner expansion team shall be in touch with you right away.</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                <a href="book1.php">Book now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
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

    <!-- Modal -->
 
          
                     
                          



    <div class="modal fade" id="l1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Customer Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="login_process.php" method="post">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                          <input type="text" class="form-control" placeholder="Enter Name" name="name">
                          </fieldset>
                       </div><br>

                       <div class="col-md-6">
                          <fieldset>
                          <input type="password" class="form-control" placeholder="Enter passwod" name="password">
                          </fieldset>
                       </div>
                  </div>

                 
                  </div>
              
           
          <div class="modal-footer">
            <button href="#exampleModal" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" name="submit">Login IN</button>
            <a href="register1.php" class="">sign in</a>
            </form>
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
              <form action="a_l_process.php" method="post">
                  <div class="row">
                       <div class="col-md-6">
                     
                          <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        
                       </div><br>

                       <div class="col-md-6">
                       
                          <input type="password" class="form-control" placeholder="Enter password" name="password">
                     
                       </div>
                  </div>

                 
                  </div>
             
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
           
            <button class="btn btn-primary" name="submit">Login IN</button>
            
            <a href="register.php" class="">sign in</a>
            
          </div>
          </form>
           </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
