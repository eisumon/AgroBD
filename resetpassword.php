<?php include'includes/head.php';
include'includes/navbar.php';

include_once("dbCon.php");
$conn =connect();

if(isset($_GET['email'])){
  $mail = $_GET['email'];
  //echo $mail;exit;
  $token = $_GET['token'];

  $sql = "SELECT * FROM users where email ='$mail' AND token='$token'";
    $result = $conn->query($sql);
  //echo $sql;exit;
    if($result->num_rows>0){

     }else{
       header("Location:404");
     }
}

  if(isset($_POST['reset'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql= "UPDATE users SET password='$password', token='' WHERE email='$email'";
    //echo $sql;exit;
     $result = $conn->query($sql);
    if(mysqli_affected_rows($conn) >0 ){
    echo "<script>myAlert('Password reset successfully', 'success', 'login');</script>";
    }
    else{
    echo "<script>myAlert('Password reset not successfully', 'error', 'resetpassword');</script>";
    }
}
?>

</head>

<body>
  <!-- Breadcrumb Form Section Begin -->
  <div class="breacrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text">
            <a href="index.php"><i class="fa fa-home"></i> Home</a>
            <span>Reset Password</span>
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
            <h2>Reset Password</h2>
            <form action="" onsubmit="return nullcheck();" method="POST">
              <div class="group-input">
                <label for="username">Email address *</label>
                <input type="email" name="email" value="<?=$_GET['email']?>">
              </div>
              <div class="group-input">
                <label for="pass">Password *</label>
                <input type="password" id="password" name="password" placeholder="password">
              </div>
              <div class="group-input">
                <label for="pass">Confirm Password *</label>
                <input type="password" id="cpassword" name="cpassword" placeholder="confirm password">
              </div>
              <button type="submit" class="site-btn login-btn" name="reset">Reset Password</button>
            </form>
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

      if ($('#password').val() == '') {
        $('#password').after('<span class="error">* This field is required</span>');
        return false;
      }
      if ($('#cpassword').val() == '') {
        $('#cpassword').after('<span class="error">* This field is required</span>');
        return false;
      }
      if ($('#password').val() !== $('#cpassword').val()) {
        $('#cpassword').after('<span class="error">* Password does not match</span>');
        return false;
      }
    }
  </script>

</body>

</html>