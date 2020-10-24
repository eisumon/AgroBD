<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn =connect();
if(isset($_POST["login"])){

$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$sql="SELECT * FROM users where email ='$email' AND password='$password'";
            $result = $conn->query($sql);
                    // echo "$sql";
              if($result->num_rows>0){
                   $_SESSION['isLoggedIn']=TRUE;

                    foreach($result as $row){
                            $_SESSION['email']=$row['email'];
                            $_SESSION['name']=$row['name'];
                    }

             echo "<script>myAlert('Login Successfully', 'success', 'index');</script>";
                } else{
             echo "<script>myAlert('Email or password does not match', 'error', 'login');</script>";
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
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section end -->

    <!-- Login Section Start -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        <hr>
                        <form action="" onsubmit="return nullcheck();" method="POST">
                            <div class="group-input">
                                <label for="email"><i class="fa fa-envelope icon"></i> Email address</label>
                                <input type="text" id="email" name="email" placeholder="Enter your email address"
                                    oninput="ontype()">
                            </div>
                            <div class="group-input">
                                <label for="password"><i class="fa fa-key icon"></i> Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <a href="forgotpassword" class="forget-pass">Forget your Password?</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn" name="login">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="./register.php" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form Section End -->

    <!-- Footer Section Start -->
    <?php include'includes/footer.php';?>
    <!-- Footer Section End -->

    <script>
        function nullcheck() {

            $(".error").remove();

            if ($('#email').val() == '') {
                $('#email').after('<span class="error">This field is required *</span>');
                return false;
            }

            if ($('#password').val() == '') {
                $('#password').after('<span class="error">This field is required *</span>');
                return false;
            }
        }

        function ontype() {
            $(".error").remove();

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