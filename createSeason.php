<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
$uid = $_SESSION['uid'];
if (isset($_POST['submit'])){
    $seasonName = $_POST['seasonName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $status = $_POST['status'];
    $expectedYield = $_POST['expectedYield'];

    $sql ="INSERT INTO create_seasons(seasonName, startDate, endDate, status, expectedYield, uid) VALUES('$seasonName', '$startDate', '$endDate', '$status', '$expectedYield', '$uid')";
       //  echo $sql;exit;
    if($conn->query($sql)){
    echo "<script>myAlert('New Task Create Successfully','success','createSeason');</script>";
    } else{
    echo "<script>myAlert(Task Create Not Successfull','error','createSeason');</script>";
    }
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM create_seasons WHERE createSeason_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
    echo "<script>myAlert('Record Delete Successfully','success','createSeason');</script>";
    } else{
    echo "<script>myAlert(Record Delete Not Successfully','error','createSeason');</script>";
    }
}  
?>
</head>

<body>

    <!-- Feature Section -->
    <section class="homenav">

        <!-- Inner Header start -->
        <div class="container">
            <div class="">
                <h4 style="padding-bottom: 20px;">Production Name</h4>
                <hr><br>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <!-- Nav bar start -->
                        <div class="nav-item2">
                            <div class="container">
                                <!-- navigation bar start -->
                                <nav class="nav-menu mobile-menu">
                                    <ul>
                                        <li><a href="fields.php">Fields</a></li>
                                        <li class="active"><a href="">Create Seasons</a></li>
                                        <li><a href="tasks.php">Tasks</a></li>
                                        <li><a href="pest.php">Pest</a></li>
                                    </ul>
                                </nav>
                                <!-- navigation bar end -->
                            </div>
                        </div>
                        <!-- Nav bar end -->
                    </div>
                    <div class="col-lg-9 col-md-9 production_box">
                        <!-- Essential button -->
                        <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Create
                            Season</button>
                        <hr>

                        <!-- Result Table -->
                        <table id="example" class="display">
                            <thead>
                                <tr>
                                    <th>Task Name:</th>
                                    <th>Start date: </th>
                                    <th>End date:</th>
                                    <th>Expected Yield:</th>
                                    <th>status: </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM create_seasons WHERE uid = '$uid'";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                                <tr>
                                    <td><?php echo $row["seasonName"]; ?></td>
                                    <td><?php echo $row["startDate"]; ?></td>
                                    <td><?php echo $row["endDate"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                    <td><?php echo $row["expectedYield"]; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                            <div class="dropdown-content">
                                                <a href="createSeason_edit.php?edit=<?php echo $row['createSeason_id'];?>"
                                                    style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                    Edit</a>
                                                <a href="createSeason.php?delete=<?php echo $row['createSeason_id'];?>"
                                                    style="color: red;"><i class="fa fa-trash" aria-hidden="true"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endwhile;?>
                            </tbody>
                        </table>
                        <!-- Result Table End -->
                    </div>
                </div>
                <!-- Inner Header end -->
    </section>


    <!-- Modal & Footer Section Begin -->
    <?php 
        include'createSeason_modal.php';
        include'includes/footer.php';
    ?>
    <!-- Modal & Footer Section End -->


    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#seasonName').val() == '') {
                $('#seasonName').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#startDate').val() == '') {
                $('#startDate').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#endDate').val() == '') {
                $('#endDate').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#status').val() == '') {
                $('#status').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#expectedYield').val() == '') {
                $('#expectedYield').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>
</body>

</html>