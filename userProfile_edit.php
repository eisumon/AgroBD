<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn = connect();

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql= "SELECT * FROM users WHERE uid=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    $row = $result-> fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
}

if (isset($_POST['update'])){
    $id = $_POST['uid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql= "UPDATE users SET name= '$name', email= '$email', phone= '$phone' WHERE uid=$id";
    $result = $conn->query($sql);
    
    if($conn->query($sql)){

        echo "<script>myAlert('Record Update Successfully','success','index');</script>";
        } else{
        echo "<script>myAlert(Record Update Not Successfully','error','userProfile_edit');</script>";
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
                        <span>Edit User Profile</span>
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
            <h3 style="text-align: center; color:#3D9E0F;">Edit User Profile</h3><br>
                <div class="container">
                    <form onsubmit="return nullcheck();" method="POST">
                        <input type="hidden" name="uid" value="<?=$id; ?>">
                        <div>
                            <label for="name">First Name:</label><br>
                            <input type="text" id="name" name="name" placeholder="Your name" value="<?=$name;?>"
                                oninput="ontype();">
                        </div>
                        <div>
                            <label for="email">Email Address:</label><br>
                            <input type="text" id="email" name="email" value="<?=$email;?>" oninput="ontype();"
                                placeholder="Your email" disabled>
                        </div>
                        <div>
                            <label for="phone">Phone Number:</label><br>
                            <input type="text" id="phone" name="phone" value="<?=$phone;?>" oninput="ontype();"
                                placeholder="Your Number">
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
        $(document).ready(function () {
            $('#example').DataTable();
        });

        function nullcheck() {

            $(".error").remove();

            $('#submit').removeAttr('disabled', true);

            if ($('#name').val() == '') {
                $('#name').after('<span class="error">* This field is required</span>');
                return false;
            }

            // if ($('#email').val() == '') {
            //     $('#email').after('<span class="error">* This field is required</span>');
            //     return false;
            // }

            if ($('#phone').val() == '') {
                $('#phone').after('<span class="error">* This field is required</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

            if ($('#name').val() !== '') {
                if (!/^[a-z ]+$/i.test($("#name").val())) {
                    $('#name').after('<span class="error">*Task name can not be numeric!!</span>');
                    return false;
                }
            }

            // if ($('#email').val() !== '') {
            //     if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {
            //         $('#email').after('<span class="error">* Type a valid email!!</span>');
            //         return false;
            //     }
            // }
        }
    </script>
</body>

</html>