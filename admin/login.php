<?php
session_start();

include("../includes/con.php");



if(isset($_POST['login'])){
 $email = $_POST['email'];
 $password = $_POST['password'];

 
 $result = mysql_query("SELECT * FROM users WHERE email='$email' AND password = MD5('$password')");
 


 if(mysql_num_rows($result) > '0')
 {
    $fetch = mysql_fetch_array($result);
    $_SESSION['uzaname'] = $fetch['username'];
    $_SESSION['id'] = $fetch['id'];

    if ($fetch['email'] == "madakifatsen@hotmail.com" && $fetch['password'] == MD5('maxx')) {
        header("location:home.php");
        }else{
            ?>
                <script>
                    window.location.href='../index2.php';
                </script>
                
            <?php    
        }
 }else{
 ?> 
    <script>
        alert("Invalid login details");
    </script>
 <?php
 }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../cssm/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="../cssm/bootshape.css" rel="stylesheet">

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
            <li class="active"><a href="../index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="../index.php">About</a></li>
            <li><a href="../index.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-12" style="background-image:url(../images/slide7.jpg); background-size:cover; margin-top:5px;">
          <div class="col-md-8">
        	 <!-- <img style="width:800px; height:400px;" src="../images/slide7.jpg"> -->
          </div>
          <div class="col-md-4" id="header1" style="color:#fff;">
               
                <h2>
                    Login 
                </h2>
                <hr>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    Email : <input type="text" class="form-control" name="email"  placeholder="Email"/><br />
                    Password : <input type="password" class="form-control" name="password" placeholder="Password"/><br />
                    <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-primary" name="login" />
                    <b style="float:right; "><a href="register.php">Sign Up</a></b>
                    </div>
                </form>
          </div>
        </div>
      </div><!-- End Slide gallery -->
    </div>

    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          
          <div class="caption">
            <h3 class="">Aluminium Works</h3>
            
          </div>
          <img src="../images/slide1.jpg">
          <p>We give you the Aluminium properties of your desired Aluminium</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h3 class="">Cars</h3>
            
          </div>
          <img src="../images/slide5.jpg">
          <p>We give you the steel properties that fit your intended car design</p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h3 class="">Steel Works</h3>  
          </div>
          <img src="../images/slide6.jpg">
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
