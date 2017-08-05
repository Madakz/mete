<?php session_start(); ?>
<?php include("includes/header.php"); ?>
<?php  


include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) {
    
   $a = strip_tags($_POST['description']);

   if(empty($a)){
         $error = "please enter a material";
        }

    if (empty($error)) {

        $sql = mysql_query("INSERT INTO materials(description) VALUES('$a')") or die(mysql_error());
    }

    if ($sql) {  ?>
       <script>
            alert("Record is successfully Entered");
       </script>
<?php }else{ ?>
        <script>
            alert("Entry wasn't successful!");
       </script>echo "";
    <?php  }
    
   
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
                                <i class="fa fa-dashboard"></i> Add Materials
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <div class="col-md-6">
                  <div><i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i></div><br/>
                
                    <div style="color:red"><?php echo $error; ?></div>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
                    
                      <div class="form-group">
                            Material:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="text" class="form-control" name="description" value="<?php echo !empty($_POST['description']) ? $_POST['description'] : ""; ?>">
                      </div>

                    
                        <br />

                        <input type="submit" name="submit" value="submit">
                      
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