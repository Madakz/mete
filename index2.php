<?php
	session_start();
?>
<?php
	if (empty($_SESSION)) {
		header("location:admin/login.php");
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mete Select</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="cssm/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="cssm/bootshape.css" rel="stylesheet">

    <link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" id="header1">METE MATERIAL SELECTOR</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">property <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="mpwmd.php">Material Property with Material Designation</a></li>
                <li><a href="mpwmn.php">Material Property with Material Number</a></li>
                <li><a href="mpwmw.php">Material Property with Manual Writing</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle"><b style="float:right; color:#000; "><i class="fa fa-user"></i><?php echo "Welcome" . " " . $_SESSION['uzaname'];?></b><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><b style="color:#000; "><i class="fa fa-user"></i><?php echo "Welcome" . " " . $_SESSION['uzaname'];?></b></a></li>
                <li><a href="admin/logout.php">Log-out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-12">
        	<div class="col-md-6">
        		<img src="images/slide7.jpg">
        	</div>
        	<div class="col-md-6" id="uniname">
	        	<a href="#"><p>MIDDLE FAST TECHNICAL UNIVERSITY,&nbsp;
	        	DEPT. OF METALLURGY & MATERIALS ENGINEERING
	        	TURKEY,2016</p></a>
        	</div>
        </div>
      </div>
    </div>

    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          
          <div class="caption">
            <h3 class="">Aluminium Works</h3>
            
          </div>
          <img src="images/slide1.jpg">
          <p>We give you the Aluminium properties of your desired Aluminium</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h3 class="">Cars</h3> 
          </div>
          <img src="images/slide5.jpg">
          <p>We give you the steel properties that fit your intended car design</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h3 class="">Steel Works</h3>
          </div>
          <img src="images/slide6.jpg">
          <p>In construction cases, properties about the appropriate Steel to be used is found here.</p>
        </div>
      </div>
    </div><!-- End Thumbnails -->
    <!-- Content -->
    <div class="container">
    </div><!-- End Content -->
    <!-- Footer -->
    <div class="footer text-center">
        <p>&copy; 2016 Mete Group. All Rights Reserved. Proudly created by <a href="http://nhubnigeria.com">nHub Nigeria</a></p>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>
