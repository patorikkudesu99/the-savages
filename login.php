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
                <a href="login.php" class="nav-link active">Login</a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
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
              <h1>Login</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 box">
            <h2 class="mb-5">Log in with your account</h2>
            <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Username</label>
                      <input type="text" id="name" class="form-control ">
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      <input type="password" id="name" class="form-control ">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section>
	
	    <section class="school-features d-flex" style="background-image: url(images/big_image_3.jpg);">

      <div class="inner">
        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-video-call"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Online trainings from experts</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
          </div>
        </div>

        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-student"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Learn anywhere in the world</h3>
            <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
          </div>
        </div>

        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-video-player-1"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Creative learning video</h3>
            <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
          </div>
        </div>


        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-audiobook"></span></div>
          <div class="media-body">
            <h3 class="mt-0">Audio learning</h3>
            <p>Harum, adipisci, aspernatur. Vero repudiandae quos ab debitis, fugiat culpa obcaecati, voluptatibus ad distinctio cum soluta fugit sed animi eaque?</p>
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