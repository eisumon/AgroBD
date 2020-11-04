<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agro BD Admin Panel</title>
  <link rel="stylesheet" href="style.css">

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
      window.location.href = "index.html";
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
      window.location.href = "login.php";
    });
  }

</script>
</head>

<body>
  <?php include("../dbCon.php");
$conn =connect();
if(isset($_POST["login"])){

$email= mysqli_real_escape_string($conn,$_POST['email']);
$password= mysqli_real_escape_string($conn,md5($_POST['password']));
$sql="SELECT * FROM admin where email ='$email' AND password='$password'";
            $result = $conn->query($sql);
                    // echo "$sql";
                    // exit;
              if($result->num_rows>0){
                   $_SESSION['isLoggedIn']=TRUE;

                    foreach($result as $row){
                            $_SESSION['email']=$row['email'];          
            }
             echo "<script>myAlert();</script>";
                } else{
             echo "<script>erAlert();</script>";
             }        
}

?>
<div class="form">
  <form method="POST">
      <h1>Admin Login Panel</h1>
    <div class="container">
      <label for="email"><b>Username</b></label>
      <input type="email" id="email" placeholder="Enter Username" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" id="password" placeholder="Enter Password" name="password" required>

      <button type="submit" name="login">Login</button>
    </div>
  </form>
  </div>
</body>

</html>
