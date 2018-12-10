<?php include('server.php');?>
<!doctype html>
<html lang="en">
  <head>
    <title>PhilNITS Reviewer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
		<style>
			.header {
				width: 40%;
				margin: 5px auto 0px;
				color: black;
				background: #99BEEF;
				text-align: center;
				border: 2px solid #99BEEF;
				border-bottom: none;
				border-radius: 5px 5px 0px 0px;
				padding: 30px;
				padding-bottom:1px;
				font-family:sans-serif;
			}
			form{
				width: 40%;
				margin: 0px auto;
				padding: 20px;
				border: 2px solid #B0C4DE;
				background: rgba(255,255,255,0.8);
				border-radius: 0px 0px 5px 5px;
			}
			.input-group{
				margin: 10px 0px 10px 0px;
			}
			.input-group label{
				color:black;
				font-family:Arial;
				display: block;
				text-align: left;
				margin: 3px;
			}
			.input-group input{
				height: 40px;
				width: 98%;
				padding: 3px 10px;
				font-size: 16px;
				border-radius: 5px;
				border: 1px solid gray;
				margin-bottom:15px;
			}
			.genderbutton, .typebutton{
				color:black;
				font-family:sans-serif;
				text-align: left;
				margin-left: 3px;
				margin-bottom:20px;
			}
			.genderbutton input, .typebutton input{
				margin-right:2px;
				margin-left:20px;
			}
			.btn{
				padding:10px;
				font-size:15px;
				color:black;
				background: rgba(255,255,255,0.5);
				border:2px solid #99BEEF;
				border-radius:20px;
				margin-left:40%;
				
			}
			p{
				font-family:sans-serif;
			}
			.login{
				text-decoration:none; 
				color:#0000B8;
			}
			.error{
				width: 92%; 
				margin: 0px auto; 
				padding: 10px; 
				border: 1px solid #a94442; 
				color: #a94442; 
				background: #f2dede; 
				border-radius: 5px; 
				text-align: left;
			}
		</style>	
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">Online IT Passport Reviewer</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="nav-link active">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/index-bg.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Register</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
      <div class="container">
        <div class="header">
			<h2>Registration Form</h2>
		</div>
		<form method="post" action="register.php">
			<?php include('errors.php');?>
			<div class="input-group">
				<label>First Name</label>
				<input type="text" placeholder="First Name" name="firstname"/>
			</div>
			<div class="input-group">
				<label>Middle Name</label>
				<input type="text" placeholder="Middle Name" name="middlename"/>
			</div>
			<div class="input-group">
				<label>Last Name</label>
				<input type="text" placeholder="Last Name" name="lastname"/>
			</div>
			<div class="genderbutton">
				<label>Gender</label><br/>
				<input type="radio" name="gender" value="Male"/>Male
				<input type="radio" name="gender" value="Female"/>Female
			</div>
			<div class="input-group">
				<label>Age</label>
				<input type="text" placeholder="Age" name="age"/>
			</div>
			<div class="input-group">
				<label>Email Address</label>
				<input type="text" placeholder="Email Address" name="email"/>
			</div>
			<div class="typebutton">
				<label>Type</label><br/>
				<input type="radio" name="type" value="Student"/>Student
				<input type="radio" name="type" value="Worker"/>Worker
			</div>
			<div class="input-group">
				<label>Course/Job</label>
				<input type="text" placeholder="Course or Job" name="course"/>
			</div>
			<div class="input-group">
				<label>School</label>
				<input type="text" placeholder="Current School/School attended" name="school"/>
			</div>
			<div class="input-group">
				<label>Username</label>
				<input type="text" placeholder="Username" name="username"/>
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" placeholder="Password" name="password_1"/>
			</div>
			<div class="input-group">
				<label>Confirm Password</label>
				<input type="password" placeholder="Confirm Password" name="password_2"/>
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>
			<center>
			<p>
				Already have an account? <a href="login.html" class="login">Log-in.</a>
			</p>
			</center>
		</form>	
      </div>
    </section>
	
	<section class="school-features d-flex" style="background-image: url(images/big_image_3.jpg);">

      <div class="inner">
        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-video-call"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Online trainings from experts</h3>
            <p></p>
          </div>
        </div>

        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-student"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Learn anywhere in the world</h3>
            <p></p>
          </div>
        </div>

        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-video-player-1"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Creative learning video</h3>
            <p></p>
          </div>
        </div>


        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-audiobook"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Audio learning</h3>
            <p></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>