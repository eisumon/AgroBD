<?php include'includes/head.php';
include'includes/navbar.php';
?>

<script type="text/javascript">
    function myAlert() {

        swal({
            title: "Login Successfully",
            type: "success",
            timer: 1000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "index";
        });
    }

    function erAlert() {
        swal({
            title: "Email or password does not match",
            type: "error",
            timer: 2000,
            showCancelButton: false,
            showConfirmButton: false,
            closeOnClickOutside: false,
        }, function () {
            window.location.href = "login";
        });
    }
</script>
</head>

<body>
<?php include_once("dbCon.php");
$conn =connect();
if(isset($_POST["login"])){

$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$sql="SELECT * FROM user_login where email ='$email' AND password='$password'";
            $result = $conn->query($sql);
                    //  print_r($result);
              if($result->num_rows>0){
                   $_SESSION['isLoggedIn']=TRUE;

                    foreach($result as $row){
                            $_SESSION['email']=$row['email'];
                            $_SESSION['name']=$row['name'];
                            
            }

             echo "<script>myAlert();</script>";
                } else{
             echo "<script>erAlert();</script>";
             }        
}
?>


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
    <!-- Breadcrumb Form Section Begin -->

    <!-- Login Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2><hr>
                        <form action="" onsubmit="return nullcheck();" method="POST">
                            <div class="group-input">
                                <label for="username"><i class="fa fa-envelope icon"></i> Email address</label>
                                <input type="text" id="email" name="email" placeholder="Enter your email address">
                            </div>
                            <div class="group-input">
                                <label for="pass"><i class="fa fa-key icon"></i> Password</label>
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
    <!-- Register Form Section End -->
</body>

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

        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {

            $('#email').after('<span class="error">Type a valid email!! *</span>');
            return false;

        }
    }
</script>

<!-- Footer-->
<?php include'includes/footer.php';?>
<!-- Footer End-->