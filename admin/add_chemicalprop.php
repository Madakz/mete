<?php 
include("includes/header.php");
?>

<?php  


include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) 
    {
       
       $a = strip_tags($_POST['carbon']);
       $b = strip_tags($_POST['chromium']);
       $c = strip_tags($_POST['manganese']);
       $d = strip_tags($_POST['molybdenum']);
       $e = strip_tags($_POST['phosphorus']);
       $f = strip_tags($_POST['sulphur']);
       $g = strip_tags($_POST['silicon']);
       $h = strip_tags($_POST['vanadium']);
       $i = strip_tags($_POST['design']);


    if(empty($i)){
        $error = "please select a designation name";

        }

    if(empty($h)){
         $error = "please enter a value for vanadium";
        }

    if(empty($g)){
         $error = "please enter a value for silicon";
        }


    if(empty($f)){
        $error = "please enter a value for sulphur";

        }

    if(empty($e)){
        $error = "please enter a value for phosphorus";

        }

    if(empty($d)){
         $error = "please enter a value for molybdenum";
        }


    if(empty($c)){
        $error = "please enter a value for manganese";

        }

    if(empty($b)){
        $error = "please enter a value for chromium";

        }

    if(empty($a)){
        $error = "please enter a value for carbon";

    }

    if (empty($error)) {
        
        $insertquery = mysql_query("INSERT INTO chemical_prop VALUES(NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i')") or die(mysql_error());
        
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
                                <i class="fa fa-dashboard"></i> Add Chemical Properties
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-md-6">

              
                    <div><i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i></div><br/>
                    <div style="color:red"><?php echo $error; ?></div>
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
                        <label for="carbon">Carbon(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="carbon" class="form-control" value="<?php echo !empty($_POST['carbon']) ? $_POST['carbon'] : ""; ?>">
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="chromium">Chromium(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="chromium" class="form-control" value="<?php echo !empty($_POST['chromium']) ? $_POST['chromium'] : ""; ?>">
                    </div>

                    <div class="form-group" style="margin-top: 10px;">
                        <label for="manganese">Manganese(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="manganese" class="form-control" value="<?php echo !empty($_POST['manganese']) ? $_POST['manganese'] : ""; ?>">
                    </div>

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="molybdenium">Molybdenium(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="molybdenum" class="form-control" value="<?php echo !empty($_POST['molybdenum']) ? $_POST['molybdenum'] : ""; ?>">
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="phosphorus">Phosphorus(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="phosphorus" class="form-control" value="<?php echo !empty($_POST['phosphorus']) ? $_POST['phosphorus'] : ""; ?>">
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="sulphur">Sulpur(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="sulphur" class="form-control" value="<?php echo !empty($_POST['sulphur']) ? $_POST['sulphur'] : ""; ?>">
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                        <label for="silicon">silicon(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="silicon" class="form-control" value="<?php echo !empty($_POST['silicon']) ? $_POST['silicon'] : ""; ?>">
                        </div>

                        <div class="form-group" style="margin-top: 10px;">
                        <label for="vanadium">Vanadium(%)&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="vanadium" class="form-control" value="<?php echo !empty($_POST['vanadium']) ? $_POST['vanadium'] : ""; ?>">
                        </div><br />

                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                      
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

    <?php include("includes/footer.php"); ?>