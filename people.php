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
     
     $sql = "SELECT phone FROM people WHERE phone='$phone'";
     $result = $conn->query($sql);
 
     if($result->num_rows>0){
         echo"<script>mailAlert();</script>";
     }else{
         $sql ="INSERT INTO people(fname, lname, gender, city, address, phone, role) VALUES('$fname', '$lname', '$gender', '$city', '$address', '$phone', '$role')";
     
         //echo $sql;exit;
         if($conn->query($sql)){
 
             echo "<script>myAlert('Register New People Successfully','success','people');</script>";
             } else{
             echo "<script>erAlert();</script>";
             }
     }
 }
 if (isset($_GET['delete'])){
     $id = $_GET['delete'];
     $sql= "DELETE FROM people WHERE p_id=$id";
     $resultt = $conn->query($sql);
     
     if($conn->query($sql)){

       echo "<script>del_Alert();</script>";
   } else{
       echo "<script>del_er_Alert();</script>";
   }
 }  
?>
</head>

<body>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index"><i class="fa fa-home"></i> Home</a>
                        <a href="people">People</a>
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
                <h4>People</h4>
                <hr>
                <!-- Essential button -->
                <button id="myBtn" class="myBtn" style="float: none;"><i class="fa fa-plus" aria-hidden="true"></i>
                    Add New
                    people</button>
                <hr>
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
                            $sql= "SELECT * FROM people";
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
                                        <a href="people_edit.php?edit=<?php echo $row['p_id'];?>"
                                            style="color: green;"><i class="fa fa-edit" aria-hidden="true"></i>
                                            Edit</a>
                                        <a href="people.php?delete=<?php echo $row['p_id'];?>" style="color: red;"><i
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
        </div>
        <!-- Inner Header end -->
    </section>

    <?php 
include'people_modal.php';
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
                    $('#fname').after('<span class="error">*Your first name can not be numeric!!</span>');
                    return false;
                }
            }
            if ($('#lname').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#lname").val())) {
                    $('#lname').after('<span class="error">*Your last name can not be numeric!!</span>');
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