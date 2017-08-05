<?php session_start(); ?>
<!-- Navigation -->

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Admin</a>

                <ul class="nav navbar-right top-nav" style="margin-left:1100px;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['uzaname'];?> <b class="caret"></b></a>
                        
                    </li>
                </ul>

            </div>
            <!-- Top Menu Items -->
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="materials.php"><i class="fa fa-fw fa-edit"></i>Materials</a>
                    </li>
                    <li>
                        <a href="standardname.php"><i class="fa fa-fw fa-edit"></i>Standard Name</a>
                    </li>
                    <li>
                        <a href="class_group.php"><i class="fa fa-fw fa-edit"></i>Classification Group</a>
                    </li>
                    <li>
                        <a href="materialdesc_list.php"><i class="fa fa-fw fa-edit"></i>Material designation List</a>
                    </li>
                    <li>
                        <a href="add_generalprop.php"><i class="fa fa-fw fa-edit"></i>Genral property</a>
                    </li>
                    <li>
                        <a href="add_chemicalprop.php"><i class="fa fa-fw fa-edit"></i>Chemical property</a>
                    </li>
                    <li>
                        <a href="add_mechanicalprop.php"><i class="fa fa-fw fa-edit"></i>Mechanical property</a>
                    </li>
                    <li>
                        <a href="add_physicalprop.php"><i class="fa fa-fw fa-edit"></i>Physical property</a>
                    </li>
                    <li>
                        <a href="add_thermalprop.php"><i class="fa fa-fw fa-edit"></i>Thermal property</a>
                    </li>
                    <li>
                        <a href="add_heat_treatment.php"><i class="fa fa-fw fa-edit"></i>Heat Treatment</a>
                    </li>
                    <li>
                        <a href="register.php"><i class="fa fa-fw fa-edit"></i>Users</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>