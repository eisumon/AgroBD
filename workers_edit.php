<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM workers WHERE w_id=$id";
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
    $id = $_POST['w_id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    $sql= "UPDATE workers SET fname= '$fname', lname= '$lname', gender= '$gender', city= '$city', address= '$address', phone= '$phone', role= '$role'  WHERE w_id=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','workers');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','workers_edit');</script>";
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
                        <a href="workers">Workers</a>
                        <span>Edit workers</span>
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
                <h3 style="text-align: center; color:#3D9E0F;">Workers</h3><br>
                <div class="container">
                    <form onsubmit="return nullcheck();" action='' method="POST">
                        <input type="hidden" name="w_id" value="<?=$id; ?>">
                        <div>
                            <label for="fname">First Name:</label><br>
                            <input type="text" id="fname" name="firstname" value="<?=$fname;?>" oninput="ontype();">
                        </div>
                        <div>
                            <label for="lname">Last Name:</label><br>
                            <input type="text" id="lname" name="lastname" value="<?php echo $lname;?>"
                                oninput="ontype();">
                        </div>
                        <div>
                            <label for="gender">Gender:</label><br>
                            <select id="gender" name="gender">
                                <option value="">Select</option>
                                <option value="male" <?php if ($row["gender"]=='male'){echo "selected";}?>>Male</option>
                                <option value="female" <?php if ($row["gender"]=='female'){echo "selected";}?>>Female</option>
                                <option value="others" <?php if ($row["gender"]=='others'){echo "selected";}?>>Others</option>
                            </select>
                        </div>
                        <div>
                            <label for="city">City:</label><br>
                            <select id="city" name="city">
                                <option value="">Select</option>
                                <option value="barishal" <?php if ($row["city"]=='barishal'){echo "selected";}?>>
                                    Barishal</option>
                                <option value="chitagong" <?php if ($row["city"]=='chitagong'){echo "selected";}?>>
                                    Chitagong</option>
                                <option value="dhaka" <?php if ($row["city"]=='dhaka'){echo "selected";}?>>Dhaka
                                </option>
                                <option value="mymensingh" <?php if ($row["city"]=='mymensingh'){echo "selected";}?>>
                                    Mymensingh </option>
                                <option value="khulna" <?php if ($row["city"]=='khulna'){echo "selected";}?>>Khulna
                                </option>
                                1<option value="rajshahi" <?php if ($row["city"]=='rajshahi'){echo "selected";}?>>
                                    Rajshahi</option>
                                <option value="rangpur" <?php if ($row["city"]=='rangpur'){echo "selected";}?>>Rangpur
                                </option>
                                <option value="sylhet" <?php if ($row["city"]=='sylhet'){echo "selected";}?>>Sylhet
                                </option>
                            </select>
                        </div>
                        <div>
                            <label for="address">Address:</label><br>
                            <input type="text" id="address" name="address" value="<?php echo $address;?>"
                                oninput="ontype();">
                        </div>
                        <div>
                            <label for="phone">Phone:</label><br>
                            <input type="text" id="phone" name="phone" value="<?php echo $phone;?>" oninput="ontype();">
                        </div>
                        <div>
                            <div>
                                <label for="role">Role:</label><br>
                                <select id="role" name="role">
                                    <option value="">Select</option>
                                    <option value="worker" <?php if ($row["role"]=='worker'){echo "selected";}?>>Worker
                                    </option>
                                    <option value="manager" <?php if ($row["role"]=='manager'){echo "selected";}?>>
                                        Manager</option>
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
        }
    </script>
</body>

</html>