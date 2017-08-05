<?Php  
include("../includes/con.php");


$error = "";
if(isset($_POST['submit']))
    {
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $conpassword = strip_tags($_POST['confirmpassword']);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $error = "invalid email format";
        }else{


if($password != $conpassword){
     $error = "please re-enter the password to confirm it";
    }

if(empty($password)){
     $error = "please enter a value for password";
    }


if(empty($email)){
    $error = "please enter a value for email";

    }

if(empty($username)){
    $error = "please enter your Full name";

    }



if(empty($error))
    {

 $query =  mysql_query("INSERT INTO users(username, email, password) VALUES('$username', '$email', MD5('$password'))") or die(mysql_error());

    if($query)
    {
        $j = mysql_insert_id();
?>
        <script>
            alert("Your Registeration was successful");
            window.location.href='login.php';
        </script>
<?php
}else{
?>
<script>
    alert("Your Registeration was not successful, please Try again");
</script>
<?php
        }

    }

    }   

}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
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
            <li><a href="login.php">Login</a></li>
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
          
          <div class="col-md-2"></div>
          <div class="col-md-8" id="header1" style="color:#000; background-color:#D9D9D9; margin:10px 10px; border-radius:5px;">
                <center><h2>
                    REGISTRATION 
                </h2></center>
                <hr>
                <div>
                  <i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i>
                </div>
                <br/>
                  <div style="color:red"><?php echo $error; ?></div>
                <form method="POST" action="register.php">
                  <div class="col-md-6">
                    Full Name:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="text" name="username" class="form-control" value="<?php echo !empty($_POST['username']) ? $_POST['username'] : ""; ?>" /> 

                    Email:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="text" name="email" class="form-control" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ""; ?>" /><br />
                  </div>
                  <div class="col-md-6">
                    Password:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="password" name="password" class="form-control" value="<?php echo !empty($_POST['password']) ? $_POST['password'] : ""; ?>" />

                    Confirm Password:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="password" name="confirmpassword" class="form-control" value="" /><br/>
                  </div>
                  <div style="margin-left:15px;">
                    <input type="submit" value="submit" class="btn btn-primary" name="submit" />
                  </div>
            </form>
               
          </div>
          <div class="col-md-2"></div>
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