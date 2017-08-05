<?php include("includes/header.php") ?>

<?php  

session_start();
include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) {
   $a = strip_tags($_POST['density']);
   $b = strip_tags($_POST['resistance']);
   $c = strip_tags($_POST['magnet']);
   $d = strip_tags($_POST['weld']);
   $e = strip_tags($_POST['tough']);
   $f = strip_tags($_POST['corrosion']);
   $g = strip_tags($_POST['cutting']);
   $h = strip_tags($_POST['design']);

    if(empty($h)){
         $error = "please select the Material Designation Name";
        }

    if(empty($g)){
        $error = "please enter the cutting property";

        }

    if(empty($f)){
        $error = "please enter a value for corrosion resistance";

        }

    if(empty($e)){
         $error = "please enter the Toughness degree";
        }


    if(empty($d)){
        $error = "please enter the weldability property";

        }

    if(empty($c)){
        $error = "please enter the magnetizing property";

        }

    if(empty($b)){
        $error = "please enter a value for the Specific Electrical resistance";

    }

    if(empty($a)){
        $error = "please enter the density of the material";

        }

    if (empty($error)) {

        $insertquery = mysql_query("INSERT INTO physical_prop VALUES(NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')") or die(mysql_error());
        
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
                                <i class="fa fa-dashboard"></i> Add Physical Properties
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
                        <label for="density">Density&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="density" class="form-control" value="<?php echo !empty ($_POST['density']) ? $_POST['density'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="seresistance">Specific Electrical Resistance&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="resistance" class="form-control" value="<?php echo !empty ($_POST['resistance']) ? $_POST['resistance'] : ""; ?>">
                        </div><br />

                        <h3>Some special properties</h3><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="magnetizable">Magnetizable&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="magnet" class="form-control" value="<?php echo !empty ($_POST['magnet']) ? $_POST['magnet'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="weldable">Weldable&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="weld" class="form-control" value="<?php echo !empty ($_POST['weld']) ? $_POST['weld'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="tdegree">Toughness Degree&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="tough" class="form-control" value="<?php echo !empty ($_POST['tough']) ? $_POST['tough'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="cresistance">Corrosion Resistance&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="corrosion" class="form-control" value="<?php echo !empty ($_POST['corrosion']) ? $_POST['corrosion'] : ""; ?>">
                        </div><br />

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px; margin-bottom: 10px;">
                        <label for="cuttingproperty">Cutting Property&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="cutting" class="form-control" value="<?php echo !empty ($_POST['cutting']) ? $_POST['cutting'] : ""; ?>">
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