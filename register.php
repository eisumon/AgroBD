<?php include'includes/head.php';
include'includes/navbar.php';
include_once("dbCon.php");

$conn =connect();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phone = $_POST['phone'];

    $sql="SELECT email FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    //  print_r($result);
    if($result->num_rows>0){

        echo "<script>myAlert('This email has already registered. Try with another email.', 'error', 'register');</script>";

    }else{
        $sql="INSERT INTO users(name, email, password, phone) VALUES('$name', '$email', '$password', '$phone')";
        //echo $sql;exit;
        if($conn->query($sql)){

        echo "<script>myAlert('Registered Successfully', 'success', 'login');</script>";
        } else{
        echo "<script>myAlert('Registered not Successfully', 'error', 'register');</script>";
        }
    }
}
?>
</head>

<body>

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
                        <form class="form-horizontal" onsubmit="return nullcheck();" method="POST">
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

    <!-- Footer Section Start -->
    <?php include'includes/footer.php';?>
    <!-- Footer Section End -->

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
        }
    </script>
    <!-- Register Form Section End -->

</body>

</html>