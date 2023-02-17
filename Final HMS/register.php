<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" href="Register.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


<div id="home">



<div class="main">
<div class="register">
<h3 class="bg-success text-white text-center py-3">Registration Form</h3>
<form action="admin_process.php" method="post">
                             <input type="text" class="form-control mb-2" placeholder="Fisrt Name" name="fname"> <br>
                              <input type="text" class="form-control mb-2" placeholder="Last Name" name="lname"> <br>
                              <input type="email" class="form-control mb-2" placeholder="Email" name="email"> <br>
                              <input type="Password" class="form-control mb-2" placeholder="Password" name="password"> <br>
                              <input type="text" class="form-control mb-2" placeholder="NIC No. " name="nic"> <br>
                              <input type="text" class="form-control mb-2" placeholder="Telephone No" name="tno"> <br>
                              <div class="input-group-icon mt-10">
								<div class="icon"><i class="" aria-hidden="true"></i></div>
								<div class="form-select">
											<select name="gender" class="form-control mb-2">
												<option>--Gender--</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									
									</select>
								</div>
							</div> <br>
                            <div class="input-group-icon mt-10">
								<div class="icon"><i class="" aria-hidden="true"></i></div>
								<div class="form-select">
											<select name="language" class="form-control mb-2">
												<option>--Language--</option>
									<option value="sinhala">Sinhala</option>
									<option value="english">English</option>
									<option value="tamil">Tamil</option>
									</select>
								</div>
							</div>
                            <br>

                            <button class="btn btn-primary" name="submit">Sign In</button>
                          

</form>
</div>
</div><!--end register-->
</div><!--end main-->



</body>
</html>