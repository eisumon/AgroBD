<?php include'includes/head.php';
 include'includes/navbar.php';
     
 include_once("dbCon.php");
 $conn = connect();
 if (isset($_POST['submit'])){
 
     $t_name = $_POST['t_name'];
     $s_date = $_POST['s_date'];
     $e_date = $_POST['e_date'];
     $status = $_POST['status'];
     $categories = $_POST['categories'];
     $crp_name = $_POST['crp_name'];
     
         $sql ="INSERT INTO tasks(t_name, s_date, e_date, status, categories, crp_name) VALUES('$t_name', '$s_date', '$e_date', '$status', '$categories', '$crp_name')";
         $result = $conn->query($sql);
         //echo $sql;exit;
         if($conn->query($sql)){
 
             echo "<script>myAlert('New Task Create Successfully','success','tasks_show');</script>";
             } else{
             echo "<script>myAlert(Task Create Not Successfull','error','tasks_show');</script>";
             }
     }
     
 if (isset($_GET['delete'])){
     $id = $_GET['delete'];
     $sql= "DELETE FROM tasks WHERE t_id=$id";
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
                        <a href="tasks_show">Task</a>
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
                                <th>Production name:</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM tasks";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                            <tr>
                                <td><?php echo $row["t_name"]; ?></td>
                                <td><?php echo $row["s_date"]; ?></td>
                                <td><?php echo $row["e_date"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><?php echo $row["categories"]; ?></td>
                                <td><?php echo $row["crp_name"]; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content">
                                            <a href="tasks_show_edit.php?edit=<?php echo $row['t_id'];?>"
                                                style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                Edit</a>
                                            <a href="tasks_show.php?delete=<?php echo $row['t_id'];?>"
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
        include'people_modal.php';
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