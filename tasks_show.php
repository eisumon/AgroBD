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
    $cropProduction_id = $_POST['cropProduction_id'];

    $sql ="INSERT INTO production_tasks(task_name, start_date, end_date, status, categories, cropProduction_id) VALUES('$task_name', '$start_date', '$end_date', '$status', '$categories', '$production_id')";
       //  echo $sql;exit;
    if($conn->query($sql)){
    echo "<script>myAlert('New Task Create Successfully','success','tasks_show');</script>";
    } else{
    echo "<script>myAlert(Task Create Not Successfull','error','tasks_show');</script>";
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
    echo "<script>myAlert('Record Delete Successfully','success','tasks_show');</script>";
    } else{
    echo "<script>myAlert(Record Delete Not Successfully','error','tasks_show');</script>";
    }
}  
?>
</head>

<body>
    <!-- Breadcrumb Section start -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index"><i class="fa fa-home"></i> Home</a>
                        <span>Task</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->


    <!-- Feature Section -->
    <section class="homenav">

        <!-- Inner Header start -->
        <div class="container production_box">
            <div class="">
                <h4>Task</h4>
                <hr>
                <div class="">
                    <!-- Essential button -->
                    <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Create
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
                                <th>Production Name:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM production_tasks";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                            <tr>
                                <td><?php echo $row["task_name"]; ?></td>
                                <td><?php echo $row["start_date"]; ?></td>
                                <td><?php echo $row["end_date"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><?php echo $row["categories"]; ?></td>
                                <td><?php echo $row["cropProduction_name"]; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content">
                                            <a href="tasks_show_edit.php?edit=<?php echo $row['task_id'];?>"
                                                style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                Edit</a>
                                            <a href="tasks_show.php?delete=<?php echo $row['task_id'];?>"
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
        include'tasks_show_modal.php';
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