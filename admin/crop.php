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
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- sweet alert -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

    <!-- sweet alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

    <!-- Alert Script -->
    <script>
        function myAlert(msg, type, redirectTo) {
            swal({
                title: msg,
                // text: "",
                type: type,
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false,
                closeOnClickOutside: false,
            }, function () {
                window.location.href = redirectTo;
            });
        }
    </script>

    <style>
        .error {
            color: RED;
            font-weight: bold;
        }
    </style>

    <?php

include_once("dbCon.php");
$conn = connect();

if (isset($_POST['submit'])){

    $crop_name = $_POST['crop_name'];
    $crop_category = $_POST['crop_category'];
    $soil_type = $_POST['soil_type'];
    $season = $_POST['season'];
    $duration = $_POST['duration'];

    $sql ="INSERT INTO crop_lists(crop_name, crop_category, soil_type, season, duration) VALUES('$crop_name', '$crop_category', '$soil_type', '$season', '$duration')";
         //echo $sql;exit;
    if($conn->query($sql)){
    echo "<script>myAlert('Rests Record Create Successfull','success','crop.php');</script>";
    } else{
    echo "<script>myAlert(Rests Record Create Not Successfull','error','crop.php');</script>";
    }
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM crop_lists WHERE cropList_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
    echo "<script>myAlert('Record Delete Successfully','success','crop.php');</script>";
    } else{
    echo "<script>myAlert(Record Delete Not Successfully','error','crop.php');</script>";
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
                            <span>Jane Doe <i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                <p>
                                    Jane Doe - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
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
                            <li><a href="crop.php"><i class="fa fa-angle-double-right"></i> Pests Data
                                    tables</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Crops</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="crop.php"><i class="fa fa-angle-double-right"></i> Crops Data
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
                    Crops
                    <small>Crops Data</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Crops</li>
                </ol>
            </section>

            <section class="col-lg-12 col-md-12 connectedSortable">

                <!-- Crop -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Insert New Crop Data</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" onsubmit="return nullcheck();" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="crop_name">Crop Name</label>
                                <input type="text" class="form-control" id="crop_name" name="crop_name"
                                    placeholder="Enter Crop Name">
                            </div>
                            <div class="form-group">
                                <label for="crop_category">Crop Category</label>
                                <input type="text" class="form-control" id="crop_category" name="crop_category"
                                    placeholder="Enter Crop Category">
                            </div>
                            <div class="form-group">
                                <label for="soil_type">Soil type</label>
                                <input type="text" class="form-control" id="soil_type" name="soil_type"
                                    placeholder="Enter Soil type">
                            </div>
                            <div class="form-group">
                                <label for="season">Season</label>
                                <input type="text" class="form-control" id="season" name="season"
                                    placeholder="Enter Season">
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration"
                                    placeholder="Enter Duration">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </section><!-- /.Left col -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Crops Data Table</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Crop Name</th>
                                            <th>Crop Category</th>
                                            <th>Soil type</th>
                                            <th>Season</th>
                                            <th>Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php include_once("dbCon.php");
                                            $conn = connect();
                                            $sql= "SELECT * FROM crop_lists";
                                            $result = $conn->query($sql);
                                                while ($row = $result-> fetch_assoc()): 
                                        ?>
                                        <tr>
                                            <td><?php echo $row["crop_name"]; ?></td>
                                            <td><?php echo $row["crop_category"]; ?></td>
                                            <td><?php echo $row["soil_type"]; ?></td>
                                            <td><?php echo $row["season"]; ?></td>
                                            <td><?php echo $row["duration"]; ?></td>
                                            <td>
                                                <button><a href="crop_edit.php?edit=<?php echo $row['cropList_id'];?>"
                                                        style="color: green;"><i class="fa fa-edit"
                                                            aria-hidden="true"></i>
                                                        Edit</a></button>
                                                <button><a href="crop.php?delete=<?php echo $row['cropList_id'];?>"
                                                        style="color: red;"><i class="fa fa-trash"
                                                            aria-hidden="true"></i>
                                                        Delete</a></button>
                                            </td>
                                        </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Crop Name</th>
                                            <th>Crop Category</th>
                                            <th>Soil type</th>
                                            <th>Season</th>
                                            <th>Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>

            </section><!-- /.content -->
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

            if ($('#crop_name').val() == '') {
                $('#crop_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#crop_category').val() == '') {
                $('#crop_category').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#description').val() == '') {
                $('#description').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#season').val() == '') {
                $('#season').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#duration').val() == '') {
                $('#duration').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>

</body>

</html>