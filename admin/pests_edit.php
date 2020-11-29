<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AdminLTE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />


    <style>
        .error {
            color: RED;
            font-weight: bold;
        }
    </style>

    <?php
include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM pests WHERE pests_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $pests_name = $row['pests_name'];
    $common_name = $row['common_name'];
    $family = $row['family'];
    $host = $row['host'];
}

if (isset($_POST['update'])){
    $id = $_POST['pests_id'];
    $pests_name = $_POST['pests_name'];
    $common_name = $_POST['common_name'];
    $family = $_POST['family'];
    $host = $_POST['host'];
    
    $sql= "UPDATE pests SET pests_name= '$pests_name', common_name= '$common_name', family= '$family', host= '$host' WHERE pests_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){
    header("location:pests.php");
    } else{
        header("location:pests_edit.php");
    }
}
?>
</head>

<body class="skin-black">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="index.php" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            AdminLTE
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <?php if(isset($_SESSION['isLoggedIn'])){?>
                            <span><?=$_SESSION['name']?> <i class="caret"></i></span>
                            <?php }else{ ?>
                            <?php } ?>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                <?php if(isset($_SESSION['isLoggedIn'])){?>
                                <p>
                                    <?=$_SESSION['name']?>
                                </p>
                                <?php }else{ ?>
                                <?php } ?>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-table"></i> <span>Pests</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="pests.php"><i class="fa fa-angle-double-right"></i> Pests Data
                                    tables</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Crops</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="crop.php"><i class="fa fa-angle-double-right"></i> Crops Data
                                    tables</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Contact Us</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="contactUs.php"><i class="fa fa-angle-double-right"></i> Contact Us Comment
                                    tables</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Pests
                    <small>Pests Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="pests.php">Pests</a></li>
                    <li class="active">Edit Pests</li>
                </ol>
            </section>

            <!-- Input Form -->
            <section class="col-lg-12 col-md-6 connectedSortable">
                <!-- Pest edit form -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Pests Data</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" onsubmit="return nullcheck();" method="POST">
                        <div class="box-body">
                            <input type="hidden" name="pests_id" value="<?=$id; ?>">
                            <div class="form-group">
                                <label for="pests_name">Name of pest</label>
                                <input type="text" class="form-control" id="pests_name" name="pests_name"
                                    value="<?=$pests_name; ?>" placeholder="Enter Name of Pest">
                            </div>
                            <div class="form-group">
                                <label for="common_name">Common name</label>
                                <input type="text" class="form-control" id="common_name" name="common_name"
                                    placeholder="Enter Common Name" value="<?=$common_name; ?>">
                            </div>
                            <!-- textarea -->
                            <div class="form-group">
                                <label for="family">Order/Family</label>
                                <input class="form-control" rows="3" id="family" name="family"
                                    placeholder="Enter Order/Family" value="<?=$family; ?>">
                            </div>
                            <div class="form-group">
                                <label for="host">Order/Family</label>
                                <input class="form-control" rows="3" id="host" name="host" placeholder="Enter host"
                                    value="<?=$host; ?>">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->

            </section><!-- /.Left col -->

        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="js/AdminLTE/app.js" type="text/javascript"></script>

    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": false,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": false
            });
        });

        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#pests_name').val() == '') {
                $('#pests_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#common_name').val() == '') {
                $('#common_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#family').val() == '') {
                $('#family').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#host').val() == '') {
                $('#host').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>

</body>

</html>