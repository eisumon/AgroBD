<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM tasks WHERE task_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $task_name = $row['task_name'];
    $start_date = $row['start_date'];
    $end_date = $row['end_date'];
    $status = $row['status'];
    $categories = $row['categories'];
}

if (isset($_POST['update'])){
    $id = $_POST['task_id'];
    $task_name = $_POST['task_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];
    $categories = $_POST['categories'];
    
    $sql= "UPDATE tasks SET task_name= '$task_name', start_date= '$start_date', end_date= '$end_date', status= '$status', categories= '$categories' WHERE task_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','tasks_show');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','tasks_show_edit');</script>";
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
                        <a href="tasks_show">Task</a>
                        <span>Edit Task</span>
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
            <!-- Modal body -->
            <div class="modal-body">
                <h3 style="text-align: center; color:#3D9E0F;">Edit Task</h3><br>
                <div class="container">
                    <form onsubmit="return nullcheck();" action="" method="POST">
                        <input type="hidden" name="task_id" value="<?=$id; ?>">
                        <div>
                            <label for="task_name">Task Name:</label><br>
                            <input type="text" id="task_name" name="task_name" oninput="ontype();" value="<?=$task_name; ?>">
                        </div>
                        <div>
                            <label for="start_date">Start date:</label><br>
                            <input type="date" id="start_date" name="start_date" value="<?=$start_date; ?>">
                        </div>
                        <div>
                            <label for="end_date">End date:</label><br>
                            <input type="date" id="end_date" name="end_date" value="<?=$end_date; ?>">
                        </div>
                        <div>
                            <label for="status">Status:</label><br>
                            <select id="status" name="status">
                                <option value="">Select</option>
                                <option value="pending" <?php if ($row["status"]=='pending'){echo "selected";}?>>Pending
                                </option>
                                <option value="in progress"
                                    <?php if ($row["status"]=='in progress'){echo "selected";}?>>In progress</option>
                                <option value="finished" <?php if ($row["status"]=='finished'){echo "selected";}?>>
                                    Finished</option>
                            </select>
                        </div>
                        <div>
                            <label for="categories">Categories:</label><br>
                            <select id="categories" name="categories">
                                <option value="">Select</option>
                                <option value="planting" <?php if ($row["categories"]=='planting'){echo "selected";}?>>
                                    Planting</option>
                                <option value="fertilizing"
                                    <?php if ($row["categories"]=='fertilizing'){echo "selected";}?>>Fertilizing
                                </option>
                            </select>
                        </div>
                        <br>
                        <div class="sub"><input type="submit" value="Update" name="update"></div>
                        <br>
                    </form>
                </div>
            </div>
            <!-- Modal body end -->
        </div>
        <!-- Inner Header end -->
    </section>

    <!-- Footer Section Begin -->
    <?php include'includes/footer.php';?>
    <!-- Footer Section End -->


    <script>
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