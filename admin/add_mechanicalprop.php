<?php include("includes/header.php") ?>

<?php  

session_start();
include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) {
   $a = strip_tags($_POST['condition']);
   $b = strip_tags($_POST['yield']);
   $c = strip_tags($_POST['endure']);
   $d = strip_tags($_POST['tensile']);
   $e = strip_tags($_POST['fracture']);
   $f = strip_tags($_POST['youngs']);
   $g = strip_tags($_POST['poisson']);
   $h = strip_tags($_POST['hardness']);
   $i = strip_tags($_POST['shear']);
   $j = strip_tags($_POST['elongation']);
   $k = strip_tags($_POST['impact']);
   $l = strip_tags($_POST['reduction']);
   $m = strip_tags($_POST['remark']);
   $n = strip_tags($_POST['design']);

   if (empty($n)){
         $error = "please select the Material Designation Name";
        }


    if(empty($j)){
        $error = "please enter the elongation value";

        }

    if(empty($i)){
        $error = "please enter the shear modulus";

        }

   if(empty($h)){
         $error = "please a value for hardness";
        }

    if(empty($g)){
        $error = "please enter the poisson's ratio";

        }

    if(empty($f)){
        $error = "please enter the young's modulus";

        }

    if(empty($e)){
         $error = "please enter fracture Toughness";
        }


    if(empty($d)){
        $error = "please enter the tensile Strength";

        }

    if(empty($c)){
        $error = "please enter the Endurance Limit";

        }

    if(empty($b)){
        $error = "please enter a value for the yield Strength";

    }

    if(empty($a)){
        $error = "please enter a value for condition";

        }

    if (empty($error)) {

        $insertquery = mysql_query("INSERT INTO mechanical_prop VALUES(NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n')") or die(mysql_error());
        
        if ($insertquery) {   ?>
          <script>
            alert("Record successfully added");
          </script>
          <?php
        }
    }
}

?>
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
                                <i class="fa fa-dashboard"></i> Add Mechanical Properties
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
                    
                    
                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="condition">Condition&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="condition" class="form-control"value="<?php echo !empty ($_POST['condition']) ? $_POST['condition'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="yielstrength">Yield Strength&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="yield" class="form-control" value="<?php echo !empty ($_POST['yield']) ? $_POST['yield'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="tensilestrength">Endurance Limit&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="endure" class="form-control" value="<?php echo !empty ($_POST['endure']) ? $_POST['endure'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="tensilestrength">Tensile Strength&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="tensile" class="form-control" value="<?php echo !empty ($_POST['tensile']) ? $_POST['tensile'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="tensilestrength">Fracture Toughness&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="fracture" class="form-control" value="<?php echo !empty ($_POST['fracture']) ? $_POST['fracture'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="ymodulus">Young's Modulus&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="youngs" class="form-control" value="<?php echo !empty ($_POST['youngs']) ? $_POST['youngs'] : ""; ?>">
                        </div>

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="pratio">Poisson's Ratio&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="poisson" class="form-control" value="<?php echo !empty ($_POST['poisson']) ? $_POST['poisson'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="hardness">Hardness&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="hardness" class="form-control" value="<?php echo !empty ($_POST['hardness']) ? $_POST['hardness'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="smodulus">Shear Modulus&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="shear" class="form-control" value="<?php echo !empty ($_POST['shear']) ? $_POST['shear'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="elongation">Elongation&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="elongation" class="form-control" value="<?php echo !empty ($_POST['elongation']) ? $_POST['elongation'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-right: 10px;">
                        <label for="ivalue">Impact Value</label>
                            <input type="text" name="impact" class="form-control" value="<?php echo !empty ($_POST['impact']) ? $_POST['impact'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="rofarea">Reduction of Area</label>
                            <input type="text" name="reduction" class="form-control" value="<?php echo !empty ($_POST['reduction']) ? $_POST['reduction'] : ""; ?>">
                        </div><br />

                        
                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="remark">Remark</label>
                            <input type="text" name="remark" class="form-control" value="<?php echo !empty ($_POST['remark']) ? $_POST['remark'] : ""; ?>">
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