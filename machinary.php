<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
if (isset($_POST['submit'])){

    $machinary_name = $_POST['machinary_name'];
    $category = $_POST['category'];
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $reg_number = $_POST['reg_number'];
    
    $sql = "SELECT reg_number FROM machinary WHERE reg_number='$reg_number'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo"<script>myAlert('Register Not Successfull. This registration number is already added. Try with another number.','error','machinary');</script>";
    }else{
        $sql ="INSERT INTO machinary(machinary_name, category, manufacturer, model, reg_number) VALUES('$machinary_name', '$category', '$manufacturer', '$model', '$reg_number')";
    
        //echo $sql;exit;
        if($conn->query($sql)){

            echo "<script>myAlert('Register New machinary Successfully','success','machinary');</script>";
            } else{
                echo "<script>myAlert(Register Not Successfully','error','machinary');</script>";
            }
    }
}
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM machinary WHERE m_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
        echo "<script>myAlert('Record Delete Successfully','success','machinary');</script>";
        } else{
        echo "<script>myAlert(Record Delete Not Successfully','error','machinary');</script>";
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
                        <a href="machinary">Machinary</a>
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
                <h4>Machinary</h4>
                <hr>
                <div class="">
                    <!-- Essential button -->
                    <button id="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Add New
                        Machinary</button>
                    <hr>

                    <!-- Result Table -->
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>Machinary Name:</th>
                                <th>Category:</th>
                                <th>Manufacturer:</th>
                                <th>Model No:</th>
                                <th>Reg.Number:</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM machinary";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                            ?>

                            <tr>
                                <td><?php echo $row["machinary_name"]; ?></td>
                                <td><?php echo $row["category"]; ?></td>
                                <td><?php echo $row["manufacturer"]; ?></td>
                                <td><?php echo $row["model"]; ?></td>
                                <td><?php echo $row["reg_number"]; ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content">
                                            <a href="machinary_edit.php?edit=<?php echo $row['m_id'];?>"
                                                style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                                Edit</a>
                                            <a href="machinary.php?delete=<?php echo $row['m_id'];?>"
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
include'machinary_modal.php';
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

            if ($('#machinary_name').val() == '') {
                $('#machinary_name').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#category').val() == '') {
                $('#category').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#manufacturer').val() == '') {
                $('#manufacturer').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#model').val() == '') {
                $('#model').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#reg_number').val() == '') {
                $('#reg_number').after('<span class="error">* This field is required</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

            if ($('#machinary_name').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#machinary_name").val())) {
                    $('#machinary_name').after('<span class="error">*Your first name can not be numeric!!</span>');
                    return false;
                }
            }
            if ($('#manufacturer').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#manufacturer").val())) {
                    $('#manufacturer').after('<span class="error">*Your last name can not be numeric!!</span>');
                    return false;
                }
            }
        }
    </script>
</body>

</html>