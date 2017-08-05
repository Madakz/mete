<?Php session_start(); ?>
<?php include("includes/header.php"); 

include("../includes/con.php");
?>

<?php  
$error ="";
if (isset($_POST['submit'])) {
   $a = strip_tags($_POST['material']);
   $b = strip_tags($_POST['description']);

   if(empty($b)){
        $error = "please select the description type";

        }

    if(empty($a)){
        $error = "please select the Material type";

        }

    if (empty($error)) {
        $sql = mysql_query("INSERT INTO standard_name VALUES (NULL, '$b', '$a')") or die(mysql_error());
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
                                <i class="fa fa-dashboard"></i> Add Standard Name
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-md-6">
                     <div><i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i></div><br/>
                    <div style="color:red;"><?php echo $error; ?></div>
              
                
                    <div style="color:red"><?php echo $error; ?></div>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

                    <div class="form-group">
                            <label for="material">Material</label>
                            <select id="material" name="material">
                    <?php
                    $j = mysql_query("SELECT * FROM materials ORDER BY description") or die(mysql_error());
                    while($row = mysql_fetch_array($j))
                    {
                    ?>


                              <option value="<?php echo $row['id']; ?>"><?php echo $row['description']; ?></option>

                    <?php
                    }
                    ?>
                            </select>
                    </div>
                    
                      <div class="form-group">
                        <label for="mdesination">Decription&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" class="form-control" name="description" value="<?php echo !empty($_POST['description']) ? $_POST['description'] : ""; ?>">
                      </div>

                    
                        <br />

                        <input type="submit" name="submit" class="btn btn-primary" value="submit">
                      
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