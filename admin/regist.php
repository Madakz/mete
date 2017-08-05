
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <script type="text/javascript" src="js/jquery-min.js"></script>
        

        <title>Register</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <link rel="stylesheet" type="text/css" href="fonts">
        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

<body>
    <div id="reg-wrapper">
        
        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="border:1px solid #DAA520">
                <h1 class="reg-header">
                    REGISTERATION 
                </h1>
                <hr>
                <div><i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i></div><br/>
           <div style="color:red"><?php echo $error; ?></div>
            <form method="POST" action="regist.php">
                <div class="form-group">
                Full Name:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="text" name="username" class="form-control" value="<?php echo !empty($_POST['username']) ? $_POST['username'] : ""; ?>" /><br />
                </div>

                <div class="form-group">
                Email:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="text" name="email" class="form-control" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ""; ?>" /><br />
                </div>

                <div class="form-group">
                Password:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="password" name="password" class="form-control" value="<?php echo !empty($_POST['password']) ? $_POST['password'] : ""; ?>" /><br />
                </div>

                <div class="form-group">
                Confirm Password:&nbsp;<em style="color:red;" >*</em>&nbsp; <input type="password" name="confirmpassword" class="form-control" value="" /><br />
                </div>

                <div class="form-group">
                <input type="submit" value="submit" class="btn btn-primary" name="submit" />
                </div>

            </form>
            </div>
        </div>
        <!-- /.row -->

        <div class="col-md-3">
        </div>
    </div>
    <!-- /#wrapper -->
    <?php include('includes/footer.php') ?>