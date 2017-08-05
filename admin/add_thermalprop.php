<?php include("includes/header.php") ?>

<?php  

session_start();
include("../includes/con.php");

$error ="";
if (isset($_POST['submit'])) {
   $a = strip_tags($_POST['maxtemp']);
   $b = strip_tags($_POST['mintemp']);
   $c = strip_tags($_POST['melt']);
   $d = strip_tags($_POST['heat']);
   $e = strip_tags($_POST['conduct']);
   $f = strip_tags($_POST['expansion']);
   $g = strip_tags($_POST['design']);  

    if(empty($g)){
         $error = "please select the Material Designation Name";
        }

    if(empty($f)){
        $error = "please enter a Thermal Expansion Coefficient";

        }

    if(empty($e)){
         $error = "please enter the value for Thermal Conductivity";
        }


    if(empty($d)){
        $error = "please enter the Specific Heat value";

        }

    if(empty($c)){
        $error = "please enter the value for Melting point";

        }

    if(empty($b)){
        $error = "please enter a minimum service Temperature";

    }

    if(empty($a)){
        $error = "please enter maximum service Temperature";

        }

    if (empty($error)) {

        $insertquery = mysql_query("INSERT INTO thermal_prop VALUES(NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g')") or die(mysql_error());
        
        if ($insertquery) {   ?>
          <script>
            alert("Record successfully added");
          </script>
          <?php
        }
    }
}

?>


    <div id="wrapper">

<?php include("includes/nav.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Add Thermal Properties
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-md-6">
                    <div><i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i></div><br/>
                    <div style="color:red;"><?php echo $error; ?></div>

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-inline" role="form">
                    
                      <div class="form-group">
                            <label for="material">Material Designation</label>
                            <select name="design">
                    <?php
                    $j = mysql_query("SELECT * FROM materialdesc_list ORDER BY designation_name") or die(mysql_error());
                    while($row = mysql_fetch_array($j))
                    {
                    ?>


                              <option value="<?php echo $row['id']; ?>"><?php echo $row['designation_name']; ?></option>

                    <?php
                    }
                    ?>
                            </select>
                    </div><br /><br />
                    
                    
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="mstemperature">Maximum Service Temperature&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="maxtemp" class="form-control" value="<?php echo !empty ($_POST['maxtemp']) ? $_POST['maxtemp'] : ""; ?>">
                        </div><br />
                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="mstemperature">Minimum Service Temperature&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="mintemp" class="form-control" value="<?php echo !empty ($_POST['mintemp']) ? $_POST['mintemp'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="mpoint">Melting Point&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="melt" class="form-control" value="<?php echo !empty ($_POST['melt']) ? $_POST['melt'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="specificheat">Specific Heat&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="heat" class="form-control" value="<?php echo !empty ($_POST['heat']) ? $_POST['heat'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="tconductivity">Thermal Conductivity&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="conduct" class="form-control" value="<?php echo !empty ($_POST['conduct']) ? $_POST['conduct'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px; margin-bottom: 10px;">
                        <label for="tecoefficient">Thermal Expansion Coefficient&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="expansion" class="form-control" value="<?php echo !empty ($_POST['expansion']) ? $_POST['expansion'] : ""; ?>">
                        </div><br />

                         <input type="submit" class="btn btn-primary" value="submit" name="submit">

               <div class="col-md-6">
                    
            
         </div>
         </div>
    </div>
</div>
</div>
</div>
                </div>

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('includes/footer.php') ?>