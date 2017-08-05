<?php
  session_start();
?>
<?php include("includes/con.php"); 
  if (empty($_SESSION)) {
    header("location:admin/login.php");
  }
?>

<?php
  
  $id = "";
  if (isset($_POST['chemical'])) {
    if (empty($_POST['standard']) || empty($_POST['classG'])) {
?>
    <script>
      //alert("Please make a selection from the dropdown");
      window.history.back(-1);
    </script>
<?php
    }
    $a = $_POST['standard'];
    $b = $_POST['classG'];
    $c = $_POST['number'];
    $d = $_POST['design'];
    $e = $_POST['designname'];

    
  ?>


<!DOCTYPE html>
<html>
  <head>
    <title>property</title>
    <script>
        function goBack(){
          window.history.back();
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="JavaScript" src="js/jquery.js"></script>
    <script language="JavaScript" src="functionsjq.js"></script>
    <script type="text/javascript" src="js/manualwrite.js"></script>
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
        <div class="col-md-12" id="headtop">
        	<h3>CHEMICAL PROPERTIES</h3>
          <hr>
        </div>
        <div class="col-md-12" id="selector">
            <?php 
            if (!empty($c) && empty($d) && empty($e)) {
              $kwery = mysql_query("SELECT * FROM materialdesc_list WHERE id='$c' AND class_group_id = '$b'") or die(mysql_error());
            }if (!empty($d) && empty($c) && empty($e)) {
              $kwery = mysql_query("SELECT * FROM materialdesc_list WHERE id='$d' AND class_group_id = '$b'") or die(mysql_error());
            }if (!empty($e) && empty($c) && empty($d)) {
              $kwery = mysql_query("SELECT * FROM materialdesc_list WHERE designation_name='$e' AND class_group_id = '$b'") or die(mysql_error());
            }
            if (empty($kwery)) {
            ?>
              <script>
                // alert("Please make a selection from the dropdown");
                window.history.back(-1);
              </script>
            <?php
            }
              while ($rowz = mysql_fetch_array($kwery)) {
            ?>
            <div class="col-md-12">
              <div class="col-md-6">
                Material Designation:
                <input name="" type="search" placeholder="<?php echo $rowz['designation_name']; ?>" class="form-control">
              </div>
              <div class="col-md-6">
                Material Number:
                <input name="" type="search" placeholder="<?php echo $rowz['number_name']; ?>" class="form-control">
              </div>
            </div>
            <?php
                }
            ?>

            <?php
                  if (!empty($c) && empty($d) && empty($e)) {
                    $qwery = mysql_query("SELECT * FROM chemical_prop WHERE material_desc_id = '$c'") or die(mysql_error());
                  }if (!empty($d) && empty($c) && empty($e)) {
                    $qwery = mysql_query("SELECT * FROM chemical_prop WHERE material_desc_id = '$d'") or die(mysql_error());
                  }if (!empty($e) && empty($c) && empty($d)) {
                    $qwery = mysql_query("SELECT * FROM materialdesc_list WHERE designation_name = '$e'") or die(mysql_error());
                      $getid = mysql_fetch_array($qwery) or die(mysql_error());
                      $id = $getid['id'];
                    $qwery = mysql_query("SELECT * FROM chemical_prop WHERE material_desc_id = '$id'") or die(mysql_error());
                  }
                  if (empty($qwery)) {
                    ?>
                      <script>
                        // alert("Please make a selection from the dropdown");
                        window.history.back(-1);
                      </script>
                    <?php
                  }
                  while ($fetch = mysql_fetch_array($qwery)) {
                  
                ?>

            <div class="col-md-12">
              <div class="col-md-2">
                Carbon(%):
                <input name="" type="search" placeholder="<?php echo $fetch['carbon'];?>" class="form-control">
              </div>
              <div class="col-md-2">
                Chromium(%):
                <input name="" type="search" placeholder="<?php echo $fetch['chromium'];?>" class="form-control">
              </div>
              <div class="col-md-2">
                Manganese(%):
                <input name="" type="search" placeholder="<?php echo $fetch['manganese'];?>" class="form-control">
              </div>
              <div class="col-md-3">
                Molybdenum(%):
                <input name="" type="search" placeholder="<?php echo $fetch['molybdenum'];?>" class="form-control">
              </div>
              <div class="col-md-3">
                Phosphorus(%):
                <input name="" type="search" placeholder="<?php echo $fetch['phosphorus'];?>" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-2">
                Sulphur(%):
                <input name="" type="search" placeholder="<?php echo $fetch['sulphur'];?>" class="form-control">
              </div>
              <div class="col-md-2">
                Silicon(%):
                <input name="" type="search" placeholder="<?php echo $fetch['silicon'];?>" class="form-control">
              </div>
              <div class="col-md-2">
                Vanadium(%):
                <input name="" type="search" placeholder="<?php echo $fetch['vanadium'];?>" class="form-control">
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                  <a href=""><button class="btn btn-success" onclick="goBack()">Back to Previous Menu</button></a>
              </div>
              <div class="col-md-6">
                  <a href="index2.php"><button class="btn btn-danger">Back to Main Menu</button></a>
              </div>
            </div>
            <br/>
                <?php
                    }
                ?>
            
            <?php
                }
            ?>
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
