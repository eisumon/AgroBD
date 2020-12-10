<?php 
include'includes/head.php';
?>
</head>

<body>
<?php 
include_once("dbCon.php");
$conn =connect();
if(isset($_POST["send"])){

  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $sql="SELECT * FROM users where email ='$email'";
  $result = $conn->query($sql);
                //  print_r($result);
                if($result->num_rows>0){
                  header("Location:recoverymail?email=$email");
                }else{
                  echo "<script>myAlert('Email does not match', 'error', 'forgotpassword');</script>";
                }
}
?>

<?php
include'includes/navbar.php';
?>
  <!-- Breadcrumb Section Begin -->
  <div class="breacrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text">
            <a href="index"><i class="fa fa-home"></i> Home</a>
            <span>Forget Password</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Form Section end -->

  <!-- Register Section Begin -->
  <div class="register-login-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="login-form">
            <h2>Input your mail</h2>
            <form action="" onsubmit="return nullcheck();" method="POST">
              <div class="group-input">
                <label for="username">Email address</label>
                <input type="text" id="email" name="email" placeholder="Enter your email address">
              </div>
              <button type="submit" class="site-btn login-btn" name="send">Send me a recovery mail</button>
            </form>
            <div class="switch-login">
              <a href="login" class="or-login">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Form Section End -->

  <!-- Footer Section Start -->
  <?php include'includes/footer.php';?>
  <!-- Footer Section End -->

  <script>
    function nullcheck() {

      $(".error").remove();

      if ($('#email').val() == '') {
        $('#email').after('<span class="error">* This field is required</span>');
        return false;
      }

      if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {

        $('#email').after('<span class="error">* Type a valid email!!</span>');
        return false;

      }
    }
  </script>

</body>

</html>