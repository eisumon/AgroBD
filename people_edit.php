<?php session_start();?>
<?php include'includes/head.php';?>

<!-- Alert script start -->
<script type="text/javascript">
    function up_Alert() {

        swal({
            title: "Update Successfull",
            type: "success",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "people";
        });
    }

    function up_erAlert() {
        swal({
            title: "Update is not Successfull",
            type: "error",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "people";
        });
    }
</script>
<!-- Alert script end -->
</head>
<body>
<?php 
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

            echo "<script>up_Alert();</script>";
        } else{
            echo "<script>up_erAlert();</script>";
        }
        
        // header("location: people.php ");
    }
?>



    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
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
            <div class="">
                <h4>People</h4>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form onsubmit="return nullcheck();" action='' method="POST">
                            <div class="row">
                                <div class="col-md-5">
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
                                        <input type="text" id="city" name="city" value="<?php echo $city;?>"
                                            placeholder="Your city" oninput="ontype();">
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1">
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
                                        <input type="text" id="role" name="role" value="<?php echo $role;?>"
                                            placeholder="Your role" oninput="ontype();">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="sub"><input type="submit" value="Update" name="update"></div>
                            <br>
                        </form>
                    </div>
                </div>
                <!-- Modal body end -->
            </div>
        </div>
        <!-- Inner Header end -->
    </section>


</body>

<!-- Footer Section Begin -->
<?php include'includes/footer.php';?>
<!-- Footer Section End -->