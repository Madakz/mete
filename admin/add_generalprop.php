<?php 
include("includes/header.php");
?>

<?php  


include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) {
   
   $a = strip_tags($_POST['equivalence']);
   $b = strip_tags($_POST['country']);
   $c = strip_tags($_POST['steel_group']);
   $d = strip_tags($_POST['application']);
   $e = strip_tags($_POST['design']);
   


    if(empty($e)){
        $error = "please select the Material Designation Name";

        }

    if(empty($d)){
        $error = "please enter Application Area";

        }

    if(empty($c)){
        $error = "please enter the Group of Steel";

        }

    if(empty($b)){
        $error = "please enter the Country of Steel";

        }


    if (empty($error)) {
        
        $insertquery = mysql_query("INSERT INTO general_prop VALUES(NULL, '$a', '$b', '$c', '$d', '$e')") or die(mysql_error());
        
        if ($insertquery) {   ?>
          <script>
            alert("Record successfully added");
          </script>
       <?php }
          
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
                                <i class="fa fa-dashboard"></i> Add General Properties
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-md-6">
                    <div><i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i></div><br/>
                    <div style="color:red;"><?php echo $error; ?></div>
                    <form class="form-inline" role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    
                      
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
                        <label for="group"> Equivalence</label>
                            <input type="text" name="equivalence" class="form-control" value="<?php echo !empty ($_POST['equivalence']) ? $_POST['equivalence'] : ""; ?>">
                        </div>
                    
                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="countryofsteel">Country of Steel&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="country" class="form-control" value="<?php echo !empty ($_POST['country']) ? $_POST['country'] : ""; ?>">
                        </div>

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="equivalence">Group of Steel&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="steel_group" class="form-control" value="<?php echo !empty ($_POST['steel_group']) ? $_POST['steel_group'] : ""; ?>">
                        </div>

                        <div class="form-group" style="margin-top: 10px; margin-left: 10px;">
                        <label for="application">Application&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" name="application" class="form-control" value="<?php echo !empty ($_POST['application']) ? $_POST['application'] : ""; ?>">
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