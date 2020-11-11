<?php include'includes/head.php';
include_once("dbCon.php");

$conn =connect();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql="SELECT email FROM admin WHERE email='$email'";
    $result = $conn->query($sql);
    //  print_r($result);
    if($result->num_rows>0){

        echo "<script>myAlert('This email has already registered. Try with another email.', 'error', 'register');</script>";

    }else{
        $sql="INSERT INTO admin(name, email, password) VALUES('$name', '$email', '$password')";
        //echo $sql;exit;
        if($conn->query($sql)){

        // echo "<script>myAlert('Registered Successfully', 'success', 'login.php');</script>";
        header('location:login.php');
        } else{
        // echo "<script>myAlert('Registered not Successfully', 'error', 'register.php');</script>";
        header('location:register.php');
        }
    }
}
?>
</head>

<body class="bg-black">

    <div class="form-box" id="login-box">
        <div class="header">Register New Membership</div>
        <form onsubmit="return nullcheck();" method="POST">
            <div class="body bg-gray">
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Full name" oninput="ontype();">
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="User Email" oninput="ontype();">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" oninput="ontype();">
                </div>
            </div>
            <div class="footer">
                <button type="submit" id="submit" class="btn bg-olive btn-block" name="submit">Sign up</button>
                <a href="login" class="text-center">I already have a membership</a>
            </div>
        </form>
    </div>


    

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
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>