<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
$production_id = $_SESSION['production_id'];

if (isset($_POST['submit'])){
    $task_name = $_POST['task_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];
    $categories = $_POST['categories'];

    $sql ="INSERT INTO production_tasks(task_name, start_date, end_date, status, categories, cropProduction_id) VALUES('$task_name', '$start_date', '$end_date', '$status', '$categories', '$production_id')";
       //  echo $sql;exit;
    if($conn->query($sql)){
    echo "<script>myAlert('New Task Create Successfully','success','tasks');</script>";
    } else{
    echo "<script>myAlert(Task Create Not Successfull','error','tasks');</script>";
    }
}

if(isset($_SESSION['production_id'])){ 
    $id = $_SESSION['production_id'];
    $sql = "SELECT * FROM crop_productions WHERE cropProduction_id = $id ";
    $result = $conn->query($sql);
    $row = $result-> fetch_assoc();
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM production_tasks WHERE task_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
    echo "<script>myAlert('Record Delete Successfully','success','tasks');</script>";
    } else{
    echo "<script>myAlert(Record Delete Not Successfully','error','tasks');</script>";
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
                <h4 style="padding-bottom: 20px;"><?php  echo $row['cropProduction_name'];?></h4>
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
                                        <li><a href="createSeason.php">Create Seasons</a></li>
                                        <li class="active"><a href="">Tasks</a></li>
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
                        <button id="myBtn"><i class="fa fa-plus" aria-hidden="true"></i> Create new
                            tasks</button>
                        <hr>
                        <!-- Result Table -->
                        <table id="example" class="display">
                            <thead>
                                <tr>
                                    <th>Task Name:</th>
                                    <th>Start date: </th>
                                    <th>End date:</th>
                                    <th>status: </th>
                                    <th>Categories:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $sql= "SELECT * FROM production_tasks WHERE cropProduction_id = $production_id";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                                <tr>
                                    <td><?php echo $row["task_name"]; ?></td>
                                    <td><?php echo $row["start_date"]; ?></td>
                                    <td><?php echo $row["end_date"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                    <td><?php echo $row["categories"]; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                            <div class="dropdown-content">
                                                <a href="tasks_edit.php?edit=<?php echo $row['task_id'];?>"
                                                    style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                    Edit</a>
                                                <a href="tasks.php?delete=<?php echo $row['task_id'];?>"
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
        include'tasks_modal.php';
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

            if ($('#task_name').val() == '') {
                $('#task_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#start_date').val() == '') {
                $('#start_date').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#end_date').val() == '') {
                $('#end_date').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#status').val() == '') {
                $('#status').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#categories').val() == '') {
                $('#categories').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#crp_name').val() == '') {
                $('#crp_name').after('<span class="error">* This field is required</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

            if ($('#task_name').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#task_name").val())) {
                    $('#task_name').after('<span class="error">*Task name can not be numeric!!</span>');
                    return false;
                }
            }
        }
    </script>
</body>

</html>