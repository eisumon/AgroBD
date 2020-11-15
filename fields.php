<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
$production_id = $_SESSION['production_id'];
$uid = $_SESSION['uid'];

if (isset($_POST['submit'])){

    $field_name = $_POST['field_name'];
    $location = $_POST['location'];
    $usable_area = $_POST['usable_area'];
    $soil_type = $_POST['soil_type'];
    $ownership_type = $_POST['ownership_type'];

    $sql ="INSERT INTO fields(field_name, location, usable_area, soil_type, ownership_type, cropProduction_id, uid) VALUES('$field_name', '$location', '$usable_area', '$soil_type', '$ownership_type', '$production_id','$uid')";
    
    if($conn->query($sql)){
    echo "<script>myAlert('Register New fields Successfully','success','fields');</script>";
    } else{
    echo "<script>myAlert(Register Not Successfully','error','fields');</script>";
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
    $sql= "DELETE FROM fields WHERE f_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
        echo "<script>myAlert('Record Delete Successfully','success','fields');</script>";
        } else{
        echo "<script>myAlert(Record Delete Not Successfully','error','fields');</script>";
        }
}

if (isset($_POST['save'])){
    $select_field = $_POST['select_field'];
    
    $sql= "UPDATE fields SET cropProduction_id= '$select_field' WHERE f_id=$_SESSION[production_id]";
    // echo $sql;
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','fields');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','fields_edit');</script>";
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
                <h4 style="padding-bottom: 20px;">
                    <?php  echo $row['cropProduction_name'];?></h4>
                <hr><br>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <!-- Nav bar start -->
                        <div class="nav-item2">
                            <div class="container">
                                <!-- navigation bar start -->
                                <nav class="nav-menu mobile-menu">
                                    <ul>
                                        <li class="active"><a href="">Fields</a></li>
                                        <li><a href="createSeason.php">Create Seasons</a></li>
                                        <li><a href="tasks.php">Tasks</a></li>
                                        <li><a href="pest.php">Pest</a></li>
                                    </ul>
                                </nav>
                                <!-- navigation bar end -->
                            </div>
                        </div>
                        <!-- Nav bar end -->
                    </div>
                    <!-- production box -->
                    <div class="col-lg-9 col-md-9 production_box">
                        <!-- Essential button -->
                        <button id="linkBtn"><i class="fa fa-link" aria-hidden="true"></i> Add Existing Field</button>
                        <button id="myBtn"><i class="fa fa-plus" aria-hidden="true"></i> Create new field</button>
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
                            $sql= "SELECT * FROM fields WHERE cropProduction_id = $production_id ";
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
                                                <a href="fields_edit.php?edit=<?php echo $row['f_id'];?>"
                                                    style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                    Edit</a>
                                                <a href="fields.php?delete=<?php echo $row['f_id'];?>"
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
include'fields_modal.php';
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