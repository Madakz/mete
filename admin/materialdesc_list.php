<?php include("includes/header.php") ?>
<?php  

session_start();
include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) {
   $a = strip_tags($_POST['class']);
   $b = strip_tags($_POST['design_name']);
   $c = strip_tags($_POST['number_name']);

   if(empty($c)){
        $error = "please a number name";

        }

    if(empty($b)){
        $error = "please enter a designation name";

        }

    if(empty($a)){
        $error = "please select a Classification group";

        }

    if (empty($error)) {
        $sql = mysql_query("INSERT INTO materialdesc_list VALUES (NULL, '$a', '$b', '$c')") or die(mysql_error());
        if ($sql) { ?>
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
                                <i class="fa fa-dashboard"></i> Add Designation
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
                            <label for="class">Classification Group</label>
                            <select name="class">
                    <?php
                    $j = mysql_query("SELECT * FROM class_group ORDER BY description") or die(mysql_error());
                    while($row = mysql_fetch_array($j))
                    {
                    ?>


                              <option value="<?php echo $row['id']; ?>"><?php echo $row['description']; ?></option>

                    <?php
                    }
                    ?>
                            </select>
                    </div><br />

                    <div class="form-group">
                        <label for="mdesination">Designation Name&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" class="form-control" name="design_name" style="margin-bottom: 11px;">
                      </div><br />

                    <div class="form-group">
                        <label for="mdesination">Number Name&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" class="form-control" name="number_name">
                      </div>
                        <br />

                        <input type="submit" class="btn btn-primary" value="submit" name="submit">
                      
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