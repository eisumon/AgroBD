<?php include'includes/head.php';
include_once("dbCon.php");
$conn =connect();
if(isset($_POST["login"])){

$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$sql="SELECT * FROM admin WHERE email ='$email' AND password='$password'";
$result = $conn->query($sql);
    // echo "$sql";
    if($result->num_rows>0){
        $_SESSION['isLoggedIn']=TRUE;
            foreach($result as $row){
                    $_SESSION['email']=$row['email'];
                    $_SESSION['name']=$row['name'];
            }
            header('location:index.php');
            } else{
            header('location:login.php');
            }        
}
?>
</head>

<body class="bg-black">

    <div class="form-box" id="login-box">
        <div class="header">Sign In</div>
        <form onsubmit="return nullcheck();" method="POST">
            <div class="body bg-gray">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="User email" oninput="ontype()">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password"
                        oninput="ontype()">
                </div>
            </div>
            <div class="footer">
                <button type="submit" class="btn bg-olive btn-block" name="login">Sign in</button>
                <p><a href="#">I forgot my password</a></p>
                <a href="register.php" class="text-center">Register a new membership</a>
            </div>
        </form>
    </div>


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

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