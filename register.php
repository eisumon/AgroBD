<?php include'includes/head.php';
include'includes/navbar.php';
?>

<!-- Alert script start -->
<script type="text/javascript">
    function myAlert() {

        swal({
            title: "Registered Successfully",
            type: "success",
            timer: 3000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "login";
        });
    }

    function erAlert() {
        swal({
            title: "Registration not Successfull",
            type: "error",
            timer: 3000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "register";
        });
    }

    function mailAlert() {
        swal({
            title: "This email has already registered. Try with another email.",
            text: "Try Agian!",
            type: "error",
            timer: 3000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "register";
        });
    }
</script>
<!-- Alert script end -->

</head>

<body>
    <?php include_once("dbCon.php");

$conn =connect();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $company_name = $_POST['company_name'];
    $phone = $_POST['phone'];

    $sql="SELECT email FROM user_login WHERE email='$email'";
    $result = $conn->query($sql);
                    //  print_r($result);
    if($result->num_rows>0){

        echo "<script>mailAlert();</script>";

    }else{
        $sql="INSERT INTO user_login(name, email, password,company_name, phone) VALUES('$name', '$email', '$password', '$company_name', '$phone')";
        //echo $sql;exit;
        if($conn->query($sql)){

        echo "<script>myAlert();</script>";
        } else{
        echo "<script>erAlert();</script>";
        }
    }
}
?>

    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <hr>
                        <form class="form-horizontal" onsubmit="return nullcheck();" action="" method="POST">
                            <div class="group-input">
                                <label for="name"><i class="fa fa-user icon"></i> Your Name*</label>
                                <input type="text" id="name" oninput="ontype();" name="name"
                                    placeholder="Enter your full name">
                            </div>
                            <div class="group-input">
                                <label for="email"> <i class="fa fa-envelope icon"></i> E-mail*</label>
                                <input type="email" id="email" oninput="ontype();" name="email"
                                    placeholder="Enter your email address">
                            </div>
                            <div class="group-input">
                                <label for="password"><i class="fa fa-key icon"></i> Password*</label>
                                <input type="password" id="password" oninput="ontype();" name="password"
                                    placeholder="Enter a new password">
                            </div>
                            <div class="group-input">
                                <label for="company_name"><i class="fa fa-building icon"></i> Company Name*</label>
                                <input type="text" id="company_name" oninput="ontype();" name="company_name"
                                    placeholder="Enter your company name">
                            </div>
                            <div class="group-input">
                                <label for="phone"><i class="fa fa-phone icon"></i> Phone Number*</label>
                                <input type="text" id="phone" oninput="ontype();" name="phone"
                                    placeholder="Enter your phone number">
                            </div>
                            <button type="submit" id="submit" class="site-btn login-btn" name="submit">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function nullcheck() {

        $(".error").remove();

        $('#submit').removeAttr('disabled', true);

        if ($('#name').val() == '') {
            $('#name').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#email').val() == '') {
            $('#email').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#password').val() == '') {
            $('#password').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#company_name').val() == '') {
            $('#company_name').after('<span class="error">* This field is required</span>');
            return false;
        }

        if ($('#phone').val() == '') {
            $('#phone').after('<span class="error">* This field is required</span>');
            return false;
        }
    }

    function ontype() {
        $(".error").remove();

        if ($('#name').val() !== '') {
            if (!/^[a-z ]+$/i.test($("#name").val())) {
                $('#name').after('<span class="error">*Your name can not be numeric!!</span>');
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
<!-- Register Form Section End -->

<!-- Footer Start -->
<?php include'includes/footer.php';?>
<!-- Footer End -->