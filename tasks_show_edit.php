<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM tasks WHERE p_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $t_name = $row['t_name'];
    $s_date = $row['s_date'];
    $e_date = $row['e_date'];
    $status = $row['status'];
    $categories = $row['categories'];
    $crp_name = $_POST['crp_name'];
}

if (isset($_POST['update'])){
    $id = $_POST['t_id'];
    $t_name = $_POST['t_name'];
    $s_date = $_POST['s_date'];
    $e_date = $_POST['e_date'];
    $status = $_POST['status'];
    $categories = $_POST['categories'];
    $crp_name = $_POST['crp_name'];
    
    $sql= "UPDATE tasks SET t_name= '$t_name', s_date= '$s_date', e_date= '$e_date', status= '$status', categories= '$categories', crp_name= '$crp_name' WHERE t_id=$id";
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
                        <a href="tasks_show_edit"> Edit Task</a>
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
            <h4>People</h4>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form onsubmit="return nullcheck();" action="" method="POST">
                        <input type="hidden" name="t_id" value="<?=$id; ?>">
                        <div>
                            <label for="t_name">Task Name:</label><br>
                            <input type="text" id="t_name" name="t_name" placeholder="Task Name" oninput="ontype();"
                                value="<?=$t_name; ?>">
                        </div>
                        <div>
                            <label for="s_date">Start date:</label><br>
                            <input type="date" id="s_date" name="s_date" value="<?=$s_date; ?>">
                        </div>
                        <div>
                            <label for="e_date">End date:</label><br>
                            <input type="date" id="e_date" name="e_date" value="<?=$e_date; ?>">
                        </div>
                        <div>
                            <label for="status">Status:</label><br>
                            <select id="status" name="status" value="<?=$status; ?>">
                                <option value="">Select</option>
                                <option value="Pending">Pending</option>
                                <option value="In progress">In progress</option>
                                <option value="Finished">Finished</option>
                            </select>
                        </div>
                        <div>
                            <label for="categories">Categories:</label><br>
                            <select id="categories" name="categories" value="<?=$categories; ?>">
                                <option value="">Select</option>
                                <option value="Planting">Planting</option>
                                <option value="Fertilizing">Fertilizing</option>
                            </select>
                        </div>
                        <div>
                            <label for="crp_name">Crop Production Name:</label><br>
                            <select id="crp_name" name="crp_name" value="<?=$crp_name; ?>">
                                <option value="australia">-</option>
                                <option value="Something">Something</option>
                                <option value="Something">Something</option>
                            </select>
                        </div>
                        <br>
                        <hr>
                        <div class="sub"><input type="submit" value="Update" name="update"></div>
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

            if ($('#t_name').val() == '') {
                $('#t_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#s_date').val() == '') {
                $('#s_date').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#e_date').val() == '') {
                $('#e_date').after('<span class="error">* This field is required</span>');
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

            if ($('#t_name').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#t_name").val())) {
                    $('#t_name').after('<span class="error">*Your first name can not be numeric!!</span>');
                    return false;
                }
            }
        }
    </script>
</body>

</html>