<?php 
session_start();
include("includes/header.php") ?>




    <div id="wrapper">

<?php include("includes/nav.php"); ?>
<?php include("../includes/con.php"); ?>
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
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    <?php 
                        $query = mysql_query("SELECT * FROM users");
                        $rows = mysql_num_rows($query);
                      
                    ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $rows; ?></div>
                                        <div>Users!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="userlist.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $a = mysql_query("SELECT * FROM materials");
                    $result = mysql_num_rows($a);
                    ?>
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-asterisk fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $result; ?></div>
                                        <div>Materials!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="materiallist.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $sql = mysql_query("SELECT * FROM standard_name");
                    $b = mysql_num_rows($sql)
                    ?>
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-magnet fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $b; ?></div>
                                        <div>Standard Names!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="standard_name_list.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $me = mysql_query("SELECT * FROM class_group");
                    $c = mysql_num_rows($me);
                    ?>
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-wrench fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $c; ?></div>
                                        <div>Classification Groups!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="classificationlist.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $mad = mysql_query("SELECT * FROM materialdesc_list");
                    $d = mysql_num_rows($mad);
                    ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-info fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $d; ?></div>
                                        <div>Designation List!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="designationlist.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $yo = mysql_query("SELECT * FROM chemical_prop");
                    $e = mysql_num_rows($yo);
                    ?>
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-chevron-circle-down fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $e; ?></div>
                                        <div>Chemical Properties!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="chemicalprop_list.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $yea = mysql_query("SELECT * FROM physical_prop");
                    $f = mysql_num_rows($yea);
                    ?>
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-anchor fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $f; ?></div>
                                        <div>Physical Properties!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="physicalprop_list.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $amo = mysql_query("SELECT * FROM general_prop");
                    $g = mysql_num_rows($amo);
                    ?>
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-compass fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $g; ?></div>
                                        <div>General Properties!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="generalprop_list.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $rel = mysql_query("SELECT * FROM mechanical_prop");
                    $chill = mysql_num_rows($rel);
                    ?>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-maxcdn fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $chill; ?></div>
                                        <div>Mechanical Properties!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="mechanicalprop_list.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $happi = mysql_query("SELECT * FROM thermal_prop");
                    $hapi = mysql_num_rows($happi);
                    ?>
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-steam fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $hapi; ?></div>
                                        <div>Thermal Properties!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="thermalprop_list.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <?php
                    $sly = mysql_query("SELECT * FROM heat_treatment_prop");
                    $go = mysql_num_rows($sly);
                    ?>
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fire-extinguisher fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $go; ?></div>
                                        <div>Heat Treatment!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="heattreatment_prop_list.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('includes/footer.php') ?>