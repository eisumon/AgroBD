<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
$uid = $_SESSION['uid'];

if (isset($_POST['submit'])){

    $field_name = $_POST['field_name'];
    $location = $_POST['location'];
    $usable_area = $_POST['usable_area'];
    $soil_type = $_POST['soil_type'];
    $ownership_type = $_POST['ownership_type'];

    $sql ="INSERT INTO fields(field_name, location, usable_area, soil_type, ownership_type, uid) VALUES('$field_name', '$location', '$usable_area', '$soil_type', '$ownership_type', '$uid')";
    
        //echo $sql;exit;
    if($conn->query($sql)){

    echo "<script>myAlert('Register New Fields Successfully','success','fieldsShow');</script>";
    } else{
    echo "<script>myAlert(Register Not Successfully','error','fieldsShow');</script>";
    }
}
    
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM fields WHERE f_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
        echo "<script>myAlert('Record Delete Successfully','success','fieldsShow');</script>";
        } else{
        echo "<script>myAlert(Record Delete Not Successfully','error','fieldsShow');</script>";
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
                        <span>Fields</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section end -->

    <!-- Feature Section start -->
    <section class="homenav">

        <!-- Inner Header start -->
        <div class="container production_box">
            <div class="">
                <h4>Fields</h4>
                <hr>
                <div class="">
                    <!-- Essential button -->
                    <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Add New
                        Fields</button>
                    <hr>

                    <!-- Result Table -->
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>Field Name:</th>
                                <th>Location:</th>
                                <th>Usable area:</th>
                                <th>Soil type:</th>
                                <th>Ownership type:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql= "SELECT * FROM fields";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                            <tr>
                                <td><?php echo $row["field_name"]; ?></td>
                                <td><?php echo $row["location"]; ?></td>
                                <td><?php echo $row["usable_area"]; ?></td>
                                <td><?php echo $row["soil_type"]; ?></td>
                                <td><?php echo $row["ownership_type"]; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content">
                                            <a href="fieldsShow_edit.php?edit=<?php echo $row['f_id'];?>"
                                                style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                Edit</a>
                                            <a href="fieldsShow.php?delete=<?php echo $row['f_id'];?>"
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
    <!-- Feature Section end -->

    <!-- Modal & Footer Section Begin -->
    <?php 
include'fieldsShow_modal.php';
include'includes/footer.php';
?>
    <!-- Footer Section End -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#field_name').val() == '') {
                $('#field_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#location').val() == '') {
                $('#location').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#usable_area').val() == '') {
                $('#usable_area').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#soil_type').val() == '') {
                $('#soil_type').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#ownership_type').val() == '') {
                $('#ownership_type').after('<span class="error">* This field is required</span>');
                return false;
            }
        }
    </script>
</body>

</html>