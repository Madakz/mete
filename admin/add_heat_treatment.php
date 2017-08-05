<?php include("includes/header.php") ?>

<?php  

session_start();
include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) {
   $a = strip_tags($_POST['hot_work']);
   $b = strip_tags($_POST['soft_tempt']);
   $c = strip_tags($_POST['duration']);
   $d = strip_tags($_POST['hard_temp']);
   $e = strip_tags($_POST['media']);
   $f = strip_tags($_POST['temper_tempt']);
   $g = strip_tags($_POST['notes']);
   $h = strip_tags($_POST['design']);

    if(empty($h)){
         $error = "please select the Material Designation Name";
        }

    if(empty($g)){
        $error = "please enter the Notes About Welding";

        }

    if(empty($f)){
        $error = "please enter the Tempering Temperature";

        }

    if(empty($e)){
         $error = "please enter the Media";
        }


    if(empty($d)){
        $error = "please enter a value for the Hardening Temperature";

        }

    if(empty($c)){
        $error = "please enter the Duration Time";

        }

    if(empty($b)){
        $error = "please enter a value for the Soft Annealing Temperature";

    }

    if(empty($a)){
        $error = "please enter a value for the hot working Temperature";

        }

    if (empty($error)) {

        $insertquery = mysql_query("INSERT INTO heat_treatment_prop VALUES(NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')") or die(mysql_error());
        
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
                                <i class="fa fa-dashboard"></i> Add Heat Treatment
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
                    </div><br />
                    
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="hwtemperature">Hot Working Temperature&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="hot_work" class="form-control" value="<?php echo !empty ($_POST['hot_work']) ? $_POST['hot_work'] : ""; ?>">
                        </div><br />
                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="satemperature">Soft Annealing Temperature&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="soft_tempt" class="form-control" value="<?php echo !empty ($_POST['soft_tempt']) ? $_POST['soft_tempt'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="dtime">Duration Time&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="duration" class="form-control" value="<?php echo !empty ($_POST['duration']) ? $_POST['duration'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="htemperature">Hardening Temperature&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="hard_temp" class="form-control" value="<?php echo !empty ($_POST['hard_temp']) ? $_POST['hard_temp'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="media">Media&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="media" class="form-control" value="<?php echo !empty ($_POST['media']) ? $_POST['media'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="ttempearture">Tempering Temperature&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="temper_tempt" class="form-control" value="<?php echo !empty ($_POST['temper_tempt']) ? $_POST['temper_tempt'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="nawelding">Notes About Welding&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="notes" class="form-control" value="<?php echo !empty ($_POST['notes']) ? $_POST['notes'] : ""; ?>">
                        </div><br />

                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        
                      
                    </form>

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