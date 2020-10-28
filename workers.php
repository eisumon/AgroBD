<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();
if (isset($_POST['submit'])){

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    $sql = "SELECT phone FROM workers WHERE phone='$phone'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo"<script>myAlert('Register Not Successfully. This phone number is already added. Try with another number.','error','workers');</script>";
    }else{
        $sql ="INSERT INTO workers(fname, lname, gender, city, address, phone, role) VALUES('$fname', '$lname', '$gender', '$city', '$address', '$phone', '$role')";
    
        //echo $sql;exit;
        if($conn->query($sql)){

            echo "<script>myAlert('Register New workers Successfully','success','workers');</script>";
            } else{
            echo "<script>myAlert(Register Not Successfully','error','workers');</script>";
            }
    }
}
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql= "DELETE FROM workers WHERE w_id=$id";
    $resultt = $conn->query($sql);
    
    if($conn->query($sql)){
        echo "<script>myAlert('Record Delete Successfully','success','workers');</script>";
        } else{
        echo "<script>myAlert(Record Delete Not Successfully','error','workers');</script>";
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
                        <span>Workers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Feature Section start -->
    <section class="homenav">

        <!-- Inner Header start -->
        <div class="container production_box">
            <h4>Workers</h4>
            <hr>
            <!-- Essential button -->
            <button id="myBtn" class="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i> Add
                New workers</button>
            <hr>
            <!-- Result Table -->
            <table id="example" class="display">
                <thead>
                    <tr>
                        <th>First Name:</th>
                        <th>Last Name:</th>
                        <th>Gender:</th>
                        <th>City:</th>
                        <th>Adreess:</th>
                        <th>Phone:</th>
                        <th>Role:</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once("dbCon.php");
                            $conn = connect();
                            $sql= "SELECT * FROM workers";
                            $result = $conn->query($sql);
                                while ($row = $result-> fetch_assoc()): 
                        ?>

                    <tr>
                        <td><?php echo $row["fname"]; ?></td>
                        <td><?php echo $row["lname"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["city"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["role"]; ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="dropbtn"><i class="fa fa-bars"></i></button>
                                <div class="dropdown-content">
                                    <a href="workers_edit.php?edit=<?php echo $row['w_id'];?>" style="color: green;"><i
                                            class="fa fa-edit" aria-hidden="true"></i>
                                        Edit</a>
                                    <a href="workers.php?delete=<?php echo $row['w_id'];?>" style="color: red;"><i
                                            class="fa fa-trash" aria-hidden="true"></i>
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
        <!-- Inner Header end -->
    </section>

    <!-- Modal & Footer Section Begin -->
    <?php 
        include'workers_modal.php';
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

            if ($('#fname').val() == '') {
                $('#fname').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#lname').val() == '') {
                $('#lname').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#gender').val() == '') {
                $('#gender').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#city').val() == '') {
                $('#city').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#address').val() == '') {
                $('#address').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#phone').val() == '') {
                $('#phone').after('<span class="error">* This field is required</span>');
                return false;
            }

            if ($('#role').val() == '') {
                $('#role').after('<span class="error">* This field is required</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

            if ($('#fname').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#fname").val())) {
                    $('#fname').after('<span class="error">*Workers first name can not be numeric!!</span>');
                    return false;
                }
            }
            if ($('#lname').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#lname").val())) {
                    $('#lname').after('<span class="error">*Workers last name can not be numeric!!</span>');
                    return false;
                }
            }
            if ($('#email').val() !== '') {
                if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {
                    $('#email').after('<span class="error">* Type a valid email!!</span>');
                    return false;
                }
            }
            if ($('#phone').val() !== '') {
                if (isNaN($("#phone").val())) {
                    $('#phone').after('<span class="error">* Phone Number should be numeric!!</span>');
                    return false;
                } else if (!/^[0-9]{11}$/.test($("#phone").val())) {
                    $('#phone').after('<span class="error">* Input 11 digit phone number!!</span>');
                    return false;
                }
            }
        }
    </script>
</body>

</html>