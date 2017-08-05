<?php include("includes/header.php") ?>
<?php  

session_start();
include("../includes/con.php");

$error = "";
if (isset($_POST['submit'])) {
   $a = strip_tags($_POST['standard']);
   $b = strip_tags($_POST['description']);

   if(empty($b)){
        $error = "please enter the description type";

        }

    if(empty($a)){
        $error = "please select the Standard name";

        }

    if (empty($error)) {
        $sql = mysql_query("INSERT INTO class_group VALUES (NULL, '$b', '$a')") or die(mysql_error());
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
                                <i class="fa fa-dashboard"></i> Add Clasification Group
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
                            <label for="material">Standard Name</label>
                            <select name="standard">
                    <?php
                    $j = mysql_query("SELECT * FROM standard_name ORDER BY description") or die(mysql_error());
                    while($row = mysql_fetch_array($j))
                    {
                    ?>


                              <option value="<?php echo $row['id']; ?>"><?php echo $row['description']; ?></option>

                    <?php
                    }
                    ?>
                            </select>
                    </div><br /><br />
                    
                      <div class="form-group">
                        <label for="mdesination">Decription&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
                            <input type="text" class="form-control" name="description">
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