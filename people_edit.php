<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM people WHERE p_id=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $fname = $row['fname'];
    $lname = $row['lname'];
    $gender = $row['gender'];
    $city = $row['city'];
    $address = $row['address'];
    $phone = $row['phone'];
    $role = $row['role'];
}

if (isset($_POST['update'])){
    $id = $_POST['p_id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    $sql= "UPDATE people SET fname= '$fname', lname= '$lname', gender= '$gender', city= '$city', address= '$address', phone= '$phone', role= '$role'  WHERE p_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','people');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','people_edit');</script>";
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
                        <span>Edit People</span>
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
                    <form onsubmit="return nullcheck();" action='' method="POST">
                        <input type="hidden" name="p_id" value="<?=$id; ?>">
                        <div>
                            <label for="fname">First Name:</label><br>
                            <input type="text" id="fname" name="firstname" value="<?=$fname;?>"
                                placeholder="Your first name" oninput="ontype();">
                        </div>
                        <div>
                            <label for="lname">Last Name:</label><br>
                            <input type="text" id="lname" name="lastname" value="<?php echo $lname;?>"
                                placeholder="Your last name" oninput="ontype();">
                        </div>
                        <div>
                            <label for="gender">Gender:</label><br>
                            <input type="text" id="gender" name="gender" value="<?php echo $gender;?>"
                                placeholder="Your last name" oninput="ontype();">
                        </div>
                        <div>
                            <label for="city">City:</label><br>
                            <input type="text" id="city" name="city" value="<?php echo $city;?>" placeholder="Your city"
                                oninput="ontype();">
                        </div>
                        <div>
                            <label for="address">Address:</label><br>
                            <input type="text" id="address" name="address" value="<?php echo $address;?>"
                                placeholder="Your address" oninput="ontype();">
                        </div>
                        <div>
                            <label for="phone">Phone:</label><br>
                            <input type="text" id="phone" name="phone" value="<?php echo $phone;?>"
                                placeholder="Your phone" oninput="ontype();">
                        </div>
                        <div>
                            <label for="phone">Role:</label><br>
                            <input type="text" id="role" name="role" value="<?php echo $role;?>" placeholder="Your role"
                                oninput="ontype();">
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
            if ($('#city').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#city").val())) {
                    $('#city').after('<span class="error">*Your city can not be numeric!!</span>');
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